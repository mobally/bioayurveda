<?php
 
namespace Retail\Push\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class Index extends \Magento\Framework\App\Action\Action
{
	/** @var  \Magento\Framework\View\Result\Page */
	protected $resultPageFactory;
	/**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory) 
    { 
    	$this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
       
    }

    /**
     * shows notification list of previous notifications.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__(''));
        return $resultPage;  
    }
}