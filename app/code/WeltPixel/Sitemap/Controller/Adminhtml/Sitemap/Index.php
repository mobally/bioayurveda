<?php
namespace WeltPixel\Sitemap\Controller\Adminhtml\Sitemap;

class Index extends \WeltPixel\Sitemap\Controller\Adminhtml\Sitemap
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->getConfig()->getTitle()->prepend(__('Add Custom URL to sitemap'));

        /**
         * Introduced in new Magento version 
         */
        $dataPersistor = $this->_objectManager->get('Magento\Framework\App\Request\DataPersistorInterface');
        $dataPersistor->clear('weltpixel_sitemap');

        return $resultPage;
    }
}
