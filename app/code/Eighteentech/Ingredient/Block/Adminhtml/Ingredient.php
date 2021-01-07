<?php
namespace Eighteentech\Ingredient\Block\Adminhtml;

class Ingredient extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_ingredient';
        $this->_blockGroup = 'Eighteentech_Ingredient';
        $this->_headerText = __('Ingredient');
        $this->_addButtonLabel = __('Add New Ingredient');
        parent::_construct();
        if ($this->_isAllowedAction('Eighteentech_Ingredient::ingredient_manage')) {
            $this->buttonList->update('add', 'label', __('Add New Ingredient'));
        } else {
            $this->buttonList->remove('add');
        }
    }
    
    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
