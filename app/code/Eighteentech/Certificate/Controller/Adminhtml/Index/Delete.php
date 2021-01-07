<?php
namespace Eighteentech\Certificate\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Delete extends \Magento\Backend\App\Action
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

	/**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;
	
    /**
     * @param Action\Context $context
	 * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Registry $registry
     */
    public function __construct(Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry)
    {
		$this->resultPageFactory = $resultPageFactory;
        $this->_coreRegistry = $registry;
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Eighteentech_Certificate::certificate_manage');
    }

    /**
     * Init actions
     *
     * @return $this
     */
    protected function _initAction()
    {
        // load layout, set active menu and breadcrumbs
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
		return $resultPage;
    }

    /**
     * Edit Certificate page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('certificate_id');
        $model = $this->_objectManager->create('Eighteentech\Certificate\Model\Certificate');
         $resultRedirect = $this->resultRedirectFactory->create();

        // 2. Initial checking
        if ($id) {
            $model->load($id)->delete();

                $this->messageManager->addSuccess(__('Certificate has been deleted.'));
                /** \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
            
        }else{
			$this->messageManager->addError(__('Record not found.'));
			}
        return $resultRedirect->setPath('*/*/');

       
    }
}
