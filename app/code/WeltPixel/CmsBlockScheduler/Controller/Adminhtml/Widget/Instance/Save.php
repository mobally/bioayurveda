<?php
/**
 *
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace WeltPixel\CmsBlockScheduler\Controller\Adminhtml\Widget\Instance;

class Save extends \Magento\Widget\Controller\Adminhtml\Widget\Instance\Save
{
    /**
     * Save action
     *
     * @return void
     */
    public function execute()
    {
        $widgetInstance = $this->_initWidgetInstance();
        if (!$widgetInstance) {
            $this->_redirect('adminhtml/*/');
            return;
        }

        $widgetInstance->setTitle(
            $this->getRequest()->getPost('title')
        )->setStoreIds(
            $this->getRequest()->getPost('store_ids', [0])
        )->setSortOrder(
            $this->getRequest()->getPost('sort_order', 0)
        )->setPageGroups(
            $this->getRequest()->getPost('widget_instance')
        )->setWidgetParameters(
            $this->getRequest()->getPost('parameters')
        )->setTag(
            $this->getRequest()->getPost('tag')
        );
        try {
            $widgetInstance->save();
            $this->messageManager->addSuccess(__('The widget instance has been saved.'));
            if ($this->getRequest()->getParam('back', false)) {
                $this->_redirect(
                    'adminhtml/*/edit',
                    ['instance_id' => $widgetInstance->getId(), '_current' => true]
                );
            } else {
                $this->_redirect('adminhtml/*/');
            }
            return;
        } catch (\Exception $exception) {
            $this->messageManager->addError($exception->getMessage());
            $this->_logger->critical($exception);
            $this->_redirect('adminhtml/*/edit', ['_current' => true]);
            return;
        }
        $this->_redirect('adminhtml/*/');
        return;
    }
}
