<?php
namespace Eighteentech\Home\Block;

/*
 * For Showing Category Slider
 * on Home Page based_on home_slider 
 * attribute
 */
 
class Home extends \Magento\Framework\View\Element\Template
{    
    protected $_categoryCollectionFactory;
    protected $_categoryFactory;
    public  $imageHelper;
    public  $outputHelper;
    protected $_registry;
    protected $_storeManager;   
    protected $cmsblock;
    protected $imageBuilder;
        
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Helper\Image $imageHelper, 
        \Magento\Catalog\Helper\Output  $outputHelper,
        \Magento\Catalog\Model\CategoryFactory  $categoryFactory,     
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,              
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Registry $registry,       
        \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder,       
        array $data = []
    )
    {    
        $this->_categoryCollectionFactory = $categoryCollectionFactory;        
        $this->_categoryFactory = $categoryFactory;
        $this->outputHelper = $outputHelper;
        $this->imageHelper = $imageHelper;
        $this->_storeManager = $storeManager;        
        $this->imageBuilder = $imageBuilder;
        $this->_registry = $registry;    
        parent::__construct($context, $data);
    }
    
    public function getCategoryCollection()
    {
        $collection = $this->_categoryCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('home_slider', array('eq' => '1'));        
        return $collection;
    }  
   


    public function getStoreId()
    {
        return $this->_storeManager->getStore()->getId();
    }

    public function getWebsiteId()
    {
        return $this->_storeManager->getStore()->getWebsiteId();
    }


    public function getCategoryInfo($categoryId){
        return $this->_categoryFactory->create()->load($categoryId);
    }
    
    
    /*public function getProductImage($product, $image_type){
		return $this->imageBuilder->setProduct($product)
        ->setImageId($image_type)
        ->create();
	}*/
	
	public function getMediaURL(){
		return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
	}
	
	
	public function getTopLevelCateogryList(){
		$collection = $this->_categoryCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('level', array('eq' => 2));
        $collection->addAttributeToFilter('show_footer', array('eq' => 1));        
        return $collection;
	}
	
	public function getCurrentCategory(){
		return $this->_registry->registry('current_category');
	}
	
}
?>
