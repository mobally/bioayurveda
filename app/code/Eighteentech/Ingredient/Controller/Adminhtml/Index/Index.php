<?php
namespace Eighteentech\Ingredient\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
	/**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
	
    /**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Eighteentech_Ingredient::ingredient_manage');
    }
    /**
     * Ingredient List action
     *
     * @return void
     */
    public function execute()
    {
		/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(
            'Eighteentech_Ingredient::ingredient_manage'
        )->addBreadcrumb(
            __('Ingredient'),
            __('Ingredient')
        )->addBreadcrumb(
            __('Manage Ingredient'),
            __('Manage Ingredient')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Ingredient'));
		return $resultPage;
    }
}
