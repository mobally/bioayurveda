<?php
namespace Eighteentech\Certificate\Block\Adminhtml;

class Certificate extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_certificate';
        $this->_blockGroup = 'Eighteentech_Certificate';
        $this->_headerText = __('Certificate');
        $this->_addButtonLabel = __('Add New Certificate');
        parent::_construct();
        if ($this->_isAllowedAction('Eighteentech_Certificate::certificate_manage')) {
            $this->buttonList->update('add', 'label', __('Add New Certificate'));
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
