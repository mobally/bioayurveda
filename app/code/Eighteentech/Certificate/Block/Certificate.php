<?php
namespace Eighteentech\Certificate\Block;
class Certificate extends \Magento\Framework\View\Element\Template
{    
   
    protected $_productFactory;   
    protected $_registry;
    protected $_storeManager;
    protected $collectionFactory;

        
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Eighteentech\Certificate\Model\ResourceModel\Certificate\CollectionFactory $collectionFactory,              
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Registry $registry,               
        array $data = []
    )
    {    
       
        $this->collectionFactory = $collectionFactory;        
        $this->_storeManager = $storeManager;
        $this->_registry = $registry;           
        parent::__construct($context, $data);
    }   
    

    public function getStoreId()
    {
        return $this->_storeManager->getStore()->getId();
    }

    public function getWebsiteId()
    {
        return $this->_storeManager->getStore()->getWebsiteId();
    }      
    
	
	public function getMediaURL(){
		return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
	}
	
	public function getCertificationList(){
		$collection = $this->collectionFactory->create();		
        $collection->addFieldToFilter('is_active', array('eq' => '1'));        
        return $collection;
	}	
	
}
?>
