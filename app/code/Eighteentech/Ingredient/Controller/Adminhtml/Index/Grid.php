<?php
namespace Eighteentech\Ingredient\Controller\Adminhtml\Index;

class Grid extends \Magento\Customer\Controller\Adminhtml\Index
{
    /**
     * Customer grid action
     *
     * @return void
     */
     
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Eighteentech_Ingredient::ingredient_manage');
    }
     
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
