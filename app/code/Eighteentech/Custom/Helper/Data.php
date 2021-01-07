<?php
namespace Eighteentech\Custom\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{  
    protected $productFactory;    
    public  $productConfigurable;
    protected $_storeManager;
    
    public function __construct(
		\Magento\ConfigurableProduct\Model\Product\Type\Configurable $productConfigurable,        
        \Magento\Catalog\Model\ProductFactory  $productFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager
		){
			
			$this->productFactory = $productFactory;
			$this->productConfigurable = $productConfigurable;			
			$this->_storeManager = $storeManager;
        
		}
		
		public function getProductInfo($productId){
			return $this->productFactory->create()->load($productId);
		}
		
		public function getMediaURL(){
			return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
		}
		
		public function getConfigAttributes(\Magento\Catalog\Model\Product $product){
			$productAttributeOptions = $this->productConfigurable->getConfigurableAttributesAsArray($product);
			$attributeIds = array();
			foreach ($productAttributeOptions as $key => $value) {	
				if(isset($value['attribute_id']) && $value['attribute_id']!=''){
					$attributeIds[] = $value['attribute_id'];
				}			
			}
			
			return $attributeIds;
		}
    
}
