<?php
namespace Eighteentech\Certificate\Controller\Adminhtml\Index;

class Grid extends \Magento\Customer\Controller\Adminhtml\Index
{
    /**
     * Customer grid action
     *
     * @return void
     */
     
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Eighteentech_Certificate::certificate_manage');
    }
     
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
