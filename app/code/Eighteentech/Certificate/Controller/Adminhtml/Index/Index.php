<?php
namespace Eighteentech\Certificate\Controller\Adminhtml\Index;

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
        return $this->_authorization->isAllowed('Eighteentech_Certificate::certificate_manage');
    }
    /**
     * Certificate List action
     *
     * @return void
     */
    public function execute()
    {
		/** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(
            'Eighteentech_Certificate::certificate_manage'
        )->addBreadcrumb(
            __('Certificate'),
            __('Certificate')
        )->addBreadcrumb(
            __('Manage Certificate'),
            __('Manage Certificate')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Certificate'));
		return $resultPage;
    }
}
