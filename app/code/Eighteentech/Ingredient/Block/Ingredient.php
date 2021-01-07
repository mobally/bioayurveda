<?php
namespace Eighteentech\Ingredient\Block;
class Ingredient extends \Magento\Framework\View\Element\Template
{    
   
    protected $_productFactory;   
    protected $_registry;
    protected $_storeManager;
    protected $_ingredientFactory;
    protected $_directory_list;

        
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Eighteentech\Ingredient\Model\IngredientFactory $ingredientFactory,
        \Magento\Catalog\Model\ProductFactory  $productFactory,       
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Filesystem\DirectoryList $directory_list,
        \Magento\Framework\Registry $registry,               
        array $data = []
    )
    {    
        $this->_productFactory = $productFactory;
        $this->_ingredientFactory = $ingredientFactory;        
        $this->_storeManager = $storeManager;
        $this->_directory_list = $directory_list;
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


    public function getProductInfo($productId){
        return $this->_productFactory->create()->load($productId);
    }


    public function getCurrentProduct()
    {        
        return $this->_registry->registry('current_product');
    }

    public function getCurrentProductData(){
        $currProduct = $this->getCurrentProduct();
        if(is_object($currProduct)){
         return  $productInfo =  $this->getProductInfo($currProduct->getId()); 
        }else
        return false;
    }    
    
	
	public function getMediaURL(){
		return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
	}
	
	public function getIngredientData($ingredientId){
		return $this->_ingredientFactory->create()->load($ingredientId);
	}
	
	public function getMediaPath(){
		return $this->_directory_list->getPath('media');
	}
}
?>
