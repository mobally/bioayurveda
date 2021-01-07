<?php
namespace Eighteentech\Certificate\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Save extends \Magento\Backend\App\Action
{
    
    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Eighteentech_Certificate::certificate_manage');
    }

    /**
     * Save action
     *
     * @return void
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if ($data) {           
            $model = $this->_objectManager->create('Eighteentech\Certificate\Model\Certificate');

            $id = $this->getRequest()->getParam('certificate_id');
            if ($id) {
                $model->load($id);
            }
            
            // save image data and remove from data array
            if (isset($data['image'])) {
                $imageData = $data['image'];
                unset($data['image']);
            } else {
                $imageData = array();
            }

            $model->addData($data);

            
            try {
                $imageHelper = $this->_objectManager->get('Eighteentech\Certificate\Helper\Data');

                if (isset($imageData['delete']) && $model->getImage()) {
                    $imageHelper->removeImage($model->getImage());
                    $model->setImage(null);
                }
                
                $imageFile = $imageHelper->uploadImage('image');
                if ($imageFile) {
                    $model->setImage($imageFile);
                }
                
                $model->save();
                $this->messageManager->addSuccess(__('The Certificate has been saved.'));
                $this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', ['certificate_id' => $model->getId(), '_current' => true]);
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (\Magento\Framework\Model\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the certificate.'));
            }

            $this->_getSession()->setFormData($data);
            $this->_redirect('*/*/edit', ['certificate_id' => $this->getRequest()->getParam('certificate_id')]);
            return;
        }
        $this->_redirect('*/*/');
    }
}
