<?php
 
namespace Retail\Analytics\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Catalog\Helper\Image;
 
class Data extends AbstractHelper
{

	public function raaCustomers($lastId, $limit , $filterKey="",$filterValue="") {
       	$retObj = array ();
       	$data = array ();
       	$new_lastId = 0;
       	try {
	        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
	        if($filterKey!="") {
	        	$data_collection = $objectManager->create('Magento\Customer\Model\Customer')->getCollection()->addFieldToFilter ( 'entity_id', array (
						"gt" => $lastId
				) )->addFieldToFilter ( $filterKey, array (
						"eq" => $filterValue
				) )->addAttributeToSelect ( "*" );
	        }
	        else {
	        	$data_collection = $objectManager->create('Magento\Customer\Model\Customer')->getCollection()->addFieldToFilter ( 'entity_id', array (
						"gt" => $lastId
				) )->addAttributeToSelect ( "*" );
	        	
	        }
	        $data_collection->getSelect ()->limit ( $limit );
	        if ($data_collection->count () > 0) {
	        	$lastId = $data_collection->getLastItem ()->getId ();
	        	foreach ( $data_collection as $customer ) {
	        		$customerArray = array ();
	        		$customerArray ['entity_id'] = $customer->getData ( 'entity_id' );
	        		$customerArray ['customer_id'] = $customer->getData ( 'entity_id' );
	        		$customerArray ['firstname'] = $customer->getData ( 'firstname' );
	        		$customerArray ['lastname'] = $customer->getData ( 'lastname' );
	        		$customerArray ['email'] = $customer->getData ( 'email' );
	        		$customerArray ['phone'] = $customer->getData ( 'phone' );
	        		$customerArray ['group_id'] = $customer->getData ( 'group_id' );
	        		$customerArray ['created_at'] = $customer->getData ( 'created_at' );
	        		$customerArray ['updated_at'] = $customer->getData ( 'updated_at' );
	        		$customerArray ['website_id'] = $customer->getData ( 'website_id' );
	        		//$customer_data = Mage::helper ( 'core' )->jsonEncode($customer->getData ());
	        		//$customerArray ['data'] = Mage::helper ( 'core' )->jsonDecode($customer_data);
	        		$data [] = $customerArray;
	        	}
	        
	        	$retObj ['data'] = $data;
	        	$retObj ['lastid'] = $lastId;
	        	if ($data_collection->count () < $limit) {
	        		$retObj ['islast'] = true;
	        	} else {
	        		$retObj ['islast'] = false;
	        	}
	        } else {
	        	$retObj ['lastid'] = $lastId;
	        	$retObj ['islast'] = true;
	        	$retObj ['data'] = $data;
	        }
	        
	        return $retObj;
	        } catch ( Exception $e ) {
	        
	        	$retObj ['lastid'] = - 1;
	        	$retObj ['islast'] = false;
	        	$retObj ['data'] = $data;
	        	return $retObj;
	        }
	}
	
	public function raaCategory($lastId, $limit ) {
	    $retObj = array ();
	    $data = array ();
	    $new_lastId = 0;
	    try {
	        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

            $data_collection = $objectManager->create('Magento\Catalog\Model\Category')->getCollection()->addFieldToFilter ( 'entity_id', array (
                "gt" => $lastId
            ) )->addAttributeToSelect ( "*" );
	            
	        
	        $data_collection->getSelect ()->limit ( $limit );
	        if ($data_collection->count () > 0) {
	            $lastId = $data_collection->getLastItem ()->getId ();
	            foreach ( $data_collection as $category ) {
	                $dataArray ["category_id"] = $category->getData ( 'entity_id' );
	                $attributes = $category->getData();
	                foreach ($attributes as $key=>$value)
	                {
	                    $dataArray [$key] = $value;
	                }
	                $data[] = $dataArray;
	            }
	            
	            $retObj ['data'] = $data;
	            $retObj ['lastid'] = $lastId;
	            if ($data_collection->count () < $limit) {
	                $retObj ['islast'] = true;
	            } else {
	                $retObj ['islast'] = false;
	            }
	        } else {
	            $retObj ['lastid'] = $lastId;
	            $retObj ['islast'] = true;
	            $retObj ['data'] = $data;
	        }
	        
	        return $retObj;
	    } catch ( Exception $e ) {
	        
	        $retObj ['lastid'] = - 1;
	        $retObj ['islast'] = false;
	        $retObj ['data'] = $data;
	        return $retObj;
	    }
	}
	
	public function raaSubscribers($lastId, $limit) {
		$retObj = array ();
		$data = array ();
		$new_lastId = 0;
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$data_collection = $objectManager->create('Magento\Newsletter\Model\Subscriber')->getCollection ()->addFieldToFilter ( 'subscriber_id', array (
					"gt" => $lastId
			) );
			$data_collection->getSelect ()->limit ( $limit );
	
			if ($data_collection->count () > 0) {
				$lastId = $data_collection->getLastItem ()->getId ();
				foreach ( $data_collection as $subscriber ) {
	
					$subscriberArray = array ();
					$subscriberArray['subscriber_id'] = $subscriber->getData ('subscriber_id');
					$subscriberArray['store_id'] = $subscriber->getData ('store_id');
					$subscriberArray['customer_id'] = $subscriber->getData ('customer_id');
					$subscriberArray['email'] = $subscriber->getData ('subscriber_email');
					$subscriberArray['issubscribed'] = ($subscriber->getData ('subscriber_status') == "1")?true:false;
					$data [] = $subscriberArray;
				}
	
				$retObj ['data'] = $data;
				$retObj ['lastid'] = $lastId;
				if ($data_collection->count () < $limit) {
					$retObj ['islast'] = true;
				} else {
					$retObj ['islast'] = false;
				}
			} else {
				$retObj ['lastid'] = $lastId;
				$retObj ['islast'] = true;
				$retObj ['data'] = $data;
			}
	
			return $retObj;
		} catch ( Exception $e ) {
	
			$retObj ['lastid'] = - 1;
			$retObj ['islast'] = false;
			$retObj ['data'] = $data;
			return $retObj;
		}
	}
	
	public function raaCustomerById($id) {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$customer = $objectManager->create('Magento\Customer\Model\Customer')->load($id);
		if($customer)
			{
				$customer_id = $customer->getData ( 'entity_id' );
				if($customer_id !=null)
				{
					$customerArray ['entity_id'] = $customer_id;
					$customerArray ['customer_id'] = $customer_id;
					$customerArray ['firstname'] = $customer->getData ( 'firstname' );
					$customerArray ['lastname'] = $customer->getData ( 'lastname' );
					$customerArray ['email'] = $customer->getData ( 'email' );
					$customerArray ['phone'] = $customer->getData ( 'phone' );
					$customerArray ['group_id'] = $customer->getData ( 'group_id' );
					$customerArray ['created_at'] = $customer->getData ( 'created_at' );
					$customerArray ['updated_at'] = $customer->getData ( 'updated_at' );
					$customerArray ['website_id'] = $customer->getData ( 'website_id' );
				}
			}
			return $customerArray;
	}
	
	public function raaProductById($id,$skip = null) {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$product = $objectManager->create('Magento\Catalog\Model\Product')->load($id);
		if($product)
		{
			if($skip == null )
			{
				$skip = array("description",'quantity_and_stock_status');
			}
			$product_id = $product->getData ( 'entity_id' );
			if($product_id !=null)
			{
				$productStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($product_id);
				$imagetype = "small_image";
				$productArray ['entity_id'] = $product_id;
				$productArray ['product_id'] = $product_id;
				$productArray ['url'] = $product->getProductUrl ();
				$productArray ['color'] = $product->getColor ();
				$store = $objectManager->get('Magento\Store\Model\StoreManagerInterface')->getStore();
				$productArray ['imageurl'] = $store->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'catalog/product' . $product->getImage();
				$productArray ["instock"] = $product->getIsInStock ();
				$productArray ["quantity"] = $productStockObj->getQty ();
				$productArray ['website_ids'] = $product->getWebsiteIds();
				$productArray ['store_ids'] = $product->getStoreIds(); 
				
				if($product->getTypeID() == "configurable")
				{
						
					$productArray ["product_child"] = array();
					$productArray ["child_sku"] = array();
					$totalQty = 0;
					$childProducts = $product->getTypeInstance()->getUsedProducts($product);
					foreach($childProducts as $child) {
						$productArray ["product_child"][] = $child->getId();
						$productArray ["child_sku"][] = $child->getSku();
						$childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
						$totalQty = ($totalQty + $childProductStockObj->getQty ());
					}
				
					$productArray ["quantity"] = $totalQty;
				}
				else if($prod->getTypeID() == "grouped")
				{
				    $productArray ["product_child"] = array();
				    $productArray ["child_sku"] = array();
				    $totalQty = 0;
				    $childProducts = $prod->getTypeInstance(true)->getAssociatedProducts($product);
				    
				    foreach($childProducts as $child) {
				        $productArray ["product_child"][] = $child->getId();
				        $productArray ["child_price"][] = $child->getFinalPrice();
				        $productArray ["child_sku"][] = $child->getSku();
				        $childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
				        $totalQty = ($totalQty + $childProductStockObj->getQty ());
				    }
				    
				    $productArray ["quantity"] = $totalQty;
				}
				
				$attributes = $product->getAttributes();
				
				foreach ($attributes as $attribute) {
					$attributeCode = $attribute->getAttributeCode();
					if (!in_array($attributeCode,$skip) &&  !is_array($attribute->getFrontend()->getValue($product)))
					{
						$productArray [$attribute->getAttributeCode()] = $attribute->getFrontend()->getValue($product);
					}
				}
				$productArray ["special_price"] = $product->getFinalPrice();
				$discountPercent = 0;
				if($productArray ["special_price"]!=$productArray ["price"])
				{
					$discountPercent = ($productArray ["price"] - $productArray ["special_price"]) * 100/$productArray ["price"];
				}
				$productArray ["discount_percent"] = $discountPercent;
				$categoryIds = $product->getCategoryIds();
				if (isset($categoryIds[0])){
					$_categoryids = array();
					$_parentCategoryids = array();
					$parentCategory="";
				
					$productArray["category_info"] = array();
					foreach ( $categoryIds as $_category ) {
						$category = $objectManager->create('Magento\Catalog\Model\Category')->load($_category);
						$cat_path = $category->getPath();
						$productArray["category_info"][] = $cat_path;
				
						$childCategories = $category->getChildrenCount();
						$parentCategory=$_category;
						if($childCategories == "0")
						{
							$_categoryids[] = $_category;
						}
						else {
							$_parentCategoryids [] = $parentCategory;
						}
				
					}
					if(count($_categoryids)==0 && $parentCategory != "" ){
						$_categoryids[] = $parentCategory;
					}
					if(count($_categoryids) > 0)
					{
						$productArray ["category_id"] = $_categoryids[0];
						$_categoryids = array_merge($_categoryids,$_parentCategoryids);
						$productArray ["category_ids"] =  $_categoryids;
					}
				}
			}
		}
		return $productArray;
	}
	
	public function raaProductsByDate($lastdate,$lastid,$limit, $filterKey="",$filterValue="",$skip=null) {
		$retObj = array ();
		$data = array ();
		$new_lastId = 0;
		$RowCount = 0;
		if($skip == null )
		{
			$skip = array("description",'quantity_and_stock_status');
		}
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$data_collection = $objectManager->create('Magento\Catalog\Model\Product')->getCollection();
			
			if($lastid==0){
				if($filterKey!="")
				{
					$data_collection = $data_collection->addAttributeToFilter('updated_at', array('gteq' => $lastdate))
					->addAttributeToFilter('entity_id', array('gt' => $lastid))
					->addAttributeToSelect ( "*" )
					->addAttributeToSort("updated_at","ASC")
					->addAttributeToSort("entity_id","ASC");
						
					if($filterKey=="website_id"){
						$data_collection = $data_collection->addWebsiteFilter($filterValue);
					}
					else if($filterKey=="store_id"){
						//$this->_storeManager->setCurrentStore('YOUR_STORE_ID');
						$data_collection = $data_collection->addStoreFilter($filterValue);
					}
				}
				else{
					$data_collection = $data_collection->addAttributeToFilter('updated_at', array('gteq' => $lastdate))
					->addAttributeToFilter('entity_id', array('gt' => $lastid))
					->addAttributeToSelect ( "*" )
					->addAttributeToSort("updated_at","ASC")
					->addAttributeToSort("entity_id","ASC");
						
				}
				$data_collection->getSelect ()->limit ( $limit );
				$RowCount = $data_collection->count ();
			}
			else {
				if($filterKey!="")
				{
					$data_collection = $data_collection->addAttributeToFilter('updated_at', array('eq' => $lastdate))
					->addAttributeToFilter('entity_id', array('gt' => $lastid))
					->addAttributeToSelect ( "*" )
					->addAttributeToSort("entity_id","ASC");
					if($filterKey=="website_id"){
						$data_collection = $data_collection->addWebsiteFilter($filterValue);
					}
					else if($filterKey=="store_id"){
						$data_collection = $data_collection->addStoreFilter($filterValue);
					}
					$data_collection->count ();
						
				}
				else
				{
					$RowCount = $data_collection->addAttributeToFilter('updated_at', array('eq' => $lastdate))
					->addAttributeToFilter('entity_id', array('gt' => $lastid))
					->count ();
						
					$data_collection = $data_collection->addAttributeToFilter('updated_at', array('eq' => $lastdate))
					->addAttributeToFilter('entity_id', array('gt' => $lastid))
					->addAttributeToSelect ( "*" )
					->addAttributeToSort("entity_id","ASC");
				}
				$data_collection->getSelect ()->limit ( $limit );
			}
			if($skip == null )
			{
				$skip = array("description",'quantity_and_stock_status');
			}
			if ($data_collection->count () > 0)
			{
				$lastdatesend = $data_collection->getLastItem ()->getUpdatedAt();
				$lastidsend=$data_collection->getLastItem()->getId();
				$helperdata = $objectManager->create('Retail\Analytics\Helper\ConfigData');
				$width = $helperdata->getImageWidth();
				$height = $helperdata->getImageHeight();
				$imagetype = "product_page_image_small";
				
				foreach ( $data_collection as $product ) {
					$prod = $objectManager->create('Magento\Catalog\Model\Product')->load($product->getId());
					$productArray = array ();
					$productStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($product->getId());
					$productArray ['entity_id'] = $product->getId();
					$productArray ['product_id'] = $product->getId();
					$store = $objectManager->get('Magento\Store\Model\StoreManagerInterface')->getStore();
						
					$productArray ['url'] = $prod->getProductUrl ();
					$productArray ['color'] = $prod->getColor ();
					$productArray ['imageurl'] = $store->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'catalog/product' . $prod->getImage();
					$productArray ["instock"] = $prod->getIsInStock ();
					$productArray ["quantity"] = $productStockObj->getQty ();
					$productArray ['website_ids'] = $prod->getWebsiteIds();
					$imageHelper  = $objectManager->get('\Magento\Catalog\Helper\Image');
					$productArray ['cacheimageurl'] = $imageHelper->init($prod, $imagetype)->setImageFile($prod->getFile())->resize($width, $height)->getUrl();
					$productArray ['store_ids'] = $prod->getStoreIds();
					
	
				if($prod->getTypeID() == "configurable")
				{
	
					$productArray ["product_child"] = array();
					$productArray ["child_sku"] = array();
					$totalQty = 0;
					$childProducts = $prod->getTypeInstance()->getUsedProducts($prod);
					foreach($childProducts as $child) {
						$productArray ["product_child"][] = $child->getId();
						$productArray ["child_sku"][] = $child->getSku();
						$childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
						$totalQty = ($totalQty + $childProductStockObj->getQty ());
					}
	
					$productArray ["quantity"] = $totalQty;

					$productTypeInstance = $objectManager->get('Magento\ConfigurableProduct\Model\Product\Type\Configurable');
					$productArray ["productAttributeOptions"] = $productTypeInstance->getConfigurableAttributesAsArray($prod);
				}
				else if($prod->getTypeID() == "bundle")
				{
					$productArray ["product_child"] = array();
					$productArray ["child_sku"] = array();
					$totalQty = 0;
					$childProducts = $prod->getTypeInstance(true)->getSelectionsCollection($prod->getTypeInstance(true)->getOptionsIds($prod), $prod);
				
					foreach($childProducts as $child) {
						$productArray ["product_child"][] = $child->getId();
						$productArray ["child_sku"][] = $child->getSku();
						$childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
						$totalQty = ($totalQty + $childProductStockObj->getQty ());
					}
				
					$productArray ["quantity"] = $totalQty;
				}
				else if($prod->getTypeID() == "grouped")
				{
				    $productArray ["product_child"] = array();
				    $productArray ["child_sku"] = array();
				    $totalQty = 0;
				    $childProducts = $prod->getTypeInstance(true)->getAssociatedProducts($product);
				    
				    foreach($childProducts as $child) {
				        $productArray ["product_child"][] = $child->getId();
				        $productArray ["child_price"][] = $child->getFinalPrice();
				        $productArray ["child_sku"][] = $child->getSku();
				        $childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
				        $totalQty = ($totalQty + $childProductStockObj->getQty ());
				    }
				    
				    $productArray ["quantity"] = $totalQty;
				}
	
				$attributes = $prod->getAttributes();
	
				foreach ($attributes as $attribute) {
					$attributeCode = $attribute->getAttributeCode();
					
					if (!in_array($attributeCode,$skip) && strpos($attributeCode, 'stripe_') === false &&  !is_array($attribute->getFrontend()->getValue($prod)) )
					{
						$productArray [$attribute->getAttributeCode()] = $attribute->getFrontend()->getValue($prod);
					}
				}
				$productArray ["special_price"] = $prod->getFinalPrice();
				$discountPercent = 0;
				if($productArray ["special_price"]!=$productArray ["price"] && $productArray ["price"]>0)
				{
					$discountPercent = ($productArray ["price"] - $productArray ["special_price"]) * 100/$productArray ["price"];
				}
				$productArray ["discount_percent"] = $discountPercent;
				$categoryIds = $prod->getCategoryIds();
				if (isset($categoryIds[0])){
					$_categoryids = array();
					$_parentCategoryids = array();
					$parentCategory="";
	
					$productArray["category_info"] = array();
					foreach ( $categoryIds as $_category ) {
						$category = $objectManager->create('Magento\Catalog\Model\Category')->load($_category);
						$cat_path = $category->getPath();
						$productArray["category_info"][] = $cat_path;
	
						$childCategories = $category->getChildrenCount();
						$parentCategory=$_category;
						if($childCategories == "0")
						{
							$_categoryids[] = $_category;
						}
						else {
							$_parentCategoryids [] = $parentCategory;
						}
	
					}
					if(count($_categoryids)==0 && $parentCategory != "" ){
						$_categoryids[] = $parentCategory;
					}
					if(count($_categoryids) > 0)
					{
						$productArray ["category_id"] = $_categoryids[0];
						$_categoryids = array_merge($_categoryids,$_parentCategoryids);
						$productArray ["category_ids"] =  $_categoryids;
					}
				}
				$data [] = $productArray;
				}
				$retObj ['data'] = $data;
				$retObj ['lastdate'] = $lastdatesend;
				if($lastdate != $lastdatesend  )
				{
					$lastidsend=0;
				}
				else if($RowCount<$limit)
				{
					$lastidsend=0;
					$duration = 1;
					$dateinsec = strtotime($lastdatesend);
					$lastdatesend = $dateinsec+$duration;
					$lastdatesend = date('Y-m-d H:i:s',$lastdatesend);
					$retObj ['lastdate'] = $lastdatesend;
				}
				$retObj ['lastid'] = $lastidsend;
				if ($data_collection->count () < $limit && $lastid==0)
				{
					$retObj ['islast'] = true;
				}
				else
				{
					$retObj ['islast'] = false;
				}
				} else {
					$duration = 1;
					$dateinsec = strtotime($lastdate);
					$lastdatesend = $dateinsec+$duration;
					$lastdatesend = date('Y-m-d H:i:s',$lastdatesend);
					$retObj ['lastdate'] = $lastdatesend;
					$retObj ['lastid'] = 0;
					if($lastid>0)
					{
						$retObj ['islast'] = false;
					}
					else
						$retObj ['islast'] = true;
					$retObj ['data'] = $data;
				}
				return $retObj;
		} catch ( Exception $e ) {
			$retObj ['lastid'] = -1;
			$retObj ['lastdate'] = $lastdate;
			$retObj ['islast'] = false;
			$retObj ['data'] = $data;
			return $retObj;
		}
	}
	
	public function raaProductCategory($lastId, $limit) {
		$retObj = array ();
		$data = array ();
		$new_lastId = 0;
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$data_collection = $objectManager->create('Magento\Catalog\Model\Product')->getCollection()->addFieldToFilter ( 'entity_id', array (
					"gt" => $lastId
			) )->addAttributeToSelect ( "*" );
			
			$data_collection->getSelect ()->limit ( $limit );
	
			if ($data_collection->count () > 0) {
				$lastId = $data_collection->getLastItem ()->getId ();
				foreach ( $data_collection as $product ) {
						
					$prod = $objectManager->create('Magento\Catalog\Model\Product')->load($product->getId());
					$productArray = array ();
					$productArray ['entity_id'] = $product->getData ( 'entity_id' );
					$productArray ['product_id'] = $product->getData ( 'entity_id' );
					$productArray ['sku'] = $product->getData ( 'sku' );
					$productArray ['website_ids'] = $product->getWebsiteIds();
					$productArray ['store_ids'] = $product->getStoreIds();
	
					$categoryIds = $prod->getCategoryIds();
					if (isset($categoryIds[0])){
						$parentCategory="";
						$_categoryids = array();
						$_parentCategoryids = array();
	
						$productArray["category_info"] = array();
						foreach ( $categoryIds as $_category ) {
							$category = $objectManager->create('Magento\Catalog\Model\Category')->load($_category);
							$cat_path = $category->getPath();
							$productArray["category_info"][] = $cat_path;
	
							$childCategories = $category->getChildrenCount();
							$parentCategory=$_category;
							if($childCategories == "0")
							{
								$_categoryids[] = $_category;
							}
							else {
								$_parentCategoryids [] = $parentCategory;
							}
	
						}
	
						if(count($_categoryids)==0 && $parentCategory != "" ){
							$_categoryids[] = $parentCategory;
						}
							
						if(count($_categoryids) > 0)
						{
							$productArray ["category_id"] = $_categoryids[0];
							$_categoryids = array_merge($_categoryids,$_parentCategoryids);
							$productArray ["category_ids"] =  $_categoryids;
							//$productArray ['root_category_id'] = Mage::helper('retail_analytics/categoryservices')->getRootCatId($productArray ["category_id"]);
						}
	
					}
	
					$data [] = $productArray;
				}
	
				$retObj ['data'] = $data;
				$retObj ['lastid'] = $lastId;
				if ($data_collection->count () < $limit) {
					$retObj ['islast'] = true;
				} else {
					$retObj ['islast'] = false;
				}
			} else {
				$retObj ['lastid'] = $lastId;
				$retObj ['islast'] = true;
				$retObj ['data'] = $data;
			}
	
			return $retObj;
		} catch ( Exception $e ) {
	
			$retObj ['lastid'] = - 1;
			$retObj ['islast'] = false;
			$retObj ['data'] = $data;
			return $retObj;
		}
	}
	
	public function raaOrderById($id) {
		$data=array();
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$order = $objectManager->create('Magento\Sales\Model\Order')->load($id);
			if ($order) {
				$order_id = $order->getData ( 'entity_id' );
	
				if($order_id !=null)
				{
					$orderArray = array ();
					$orderArray ['entity_id'] = $order->getData ( 'entity_id' );
					$orderArray ['order_id'] = $order->getData ( 'entity_id' );
					$orderArray ['created_at'] = $order->getData ( 'created_at' );
					$orderArray ['updated_at'] = $order->getData ( 'updated_at' );
					$orderArray ['status'] = $order->getData ( 'status' );
					$orderArray ['subtotal'] = $order->getData ( 'subtotal' );
					$orderArray ['base_subtotal'] = $order->getData ( 'base_subtotal' );
					$orderArray ['grand_total'] = $order->getData ( 'grand_total' );
					$orderArray ['base_grand_total'] = $order->getData ( 'base_grand_total' );
					$orderArray ['payment_method'] = $order->getPayment()->getData('method');
					$orderArray ['coupon_code'] = $order->getData ( 'coupon_code' );
					$orderArray ['increment_id'] = $order->getData ( 'increment_id' );
					$orderArray ["store_id"] = $order['store_id'];
					//$orderData = Mage::helper ( 'core' )->jsonEncode($order->getData());
					$orderArray ['order_data'] =  $order->getData();
	
					$orderArray ['customer_id'] = $order->getData ( 'customer_id' );
					$orderArray ['email'] = $order->getData ( 'customer_email' );
					$orderArray ['customer_firstname'] = $order->getData ( 'customer_firstname' );
					$orderArray ['customer_middlename'] = $order->getData ( 'customer_middlename' );
					$orderArray ['customer_lastname'] = $order->getData ( 'customer_lastname' );
					$orderArray ['customer_dob'] = $order->getData ( 'customer_dob' );
					$orderArray ['customer_group_id'] = $order->getData ( 'customer_group_id' );
					$orderArray ['customer_is_guest'] = $order->getData ( 'customer_is_guest' );
					$orderArray ['customer_prefix'] = $order->getData ( 'customer_prefix' );
					$orderArray ['customer_suffix'] = $order->getData ( 'customer_suffix' );
					$orderArray ['customer_taxvat'] = $order->getData ( 'customer_taxvat' );
					$orderArray ['customer_note'] = $order->getData ( 'customer_note' );
	
					/**currency type*/
					$orderArray ['global_currency_code']=$order->getData ( 'global_currency_code' );
					$orderArray ['base_currency_code']=$order->getData ( 'base_currency_code' );
					$orderArray ['order_currency_code']=$order->getData ( 'order_currency_code' );
					$orderArray ['store_currency_code']=$order->getData ( 'store_currency_code' );
	
	
					$billingAddress =  $order->getBillingAddress();
					$shippingAddress = $order->getShippingAddress();
					$orderArray ['billing_address'] =  $billingAddress;
					$orderArray ['shipping_address'] =  $shippingAddress;
	
	
					$orderItem = array ();
					$items = $order->getAllItems ();
					foreach ( $items as $item ) {
	
						$orderItem['product_id'] = $item->getData ( 'product_id' );
						$orderItem ['sku'] = $item->getData ( 'sku' );
						$orderItem ['quantity'] = $item->getData ( 'qty_ordered' );
						$orderItem ['price'] = $item->getData ( 'price_incl_tax' );
						$orderItem ['discount'] = $item->getData ( 'discount_amount' );
						$orderItem ['base_price']=$item->getData ( 'base_price' );
						$orderItem ['base_discount']=  $item->getData ( 'base_discount_amount' );
						$orderItem ['original_price']=$item->getData ( 'original_price' );
						$orderItem ['base_original_price']=$item->getData ( 'base_original_price' );
	
						$order = array_merge($orderArray, $orderItem);
						$data[] = $order;
					}
				}
			}
			return $data;
		} catch ( Exception $e ) {
			return $data;
		}
	}
	
	public function raaOrdersByDate($lastdate,$lastid,$limit, $filterKey="",$filterValue="") {
		$retObj = array ();
		$data = array ();
		$new_lastId = 0;
		$RowCount = 0;
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$data_collection = $objectManager->create('Magento\Sales\Model\Order')->getCollection();
			if($lastid==0)
			{
				$data_collection = $data_collection->addAttributeToFilter('updated_at', array('gteq' => $lastdate))
				->addAttributeToFilter('entity_id', array('gt' => $lastid))
				->addAttributeToSelect ( "*" )
				->addAttributeToSort("updated_at","ASC")
				->addAttributeToSort("entity_id","ASC");
				if($filterKey!=""){
					$data_collection = $data_collection->addAttributeToFilter ( $filterKey, array (
							"eq" => $filterValue
					) );
				}
				$data_collection->getSelect ()->limit ( $limit );
				$RowCount = $data_collection->count ();
					
			}
			else
			{
				$data_collection = $data_collection->addAttributeToFilter('updated_at', array('eq' => $lastdate))
				->addAttributeToFilter('entity_id', array('gt' => $lastid))
				->addAttributeToSelect ( "*" )
				->addAttributeToSort("entity_id","ASC");
				if($filterKey!=""){
					$data_collection = $data_collection->addAttributeToFilter ( $filterKey, array (
							"eq" => $filterValue
					) );
				}
				$data_collection->getSelect ()->limit ( $limit );
				$RowCount = $data_collection->count ();
			}
	
			if ($data_collection->count () > 0) {
				$lastdatesend = $data_collection->getLastItem ()->getUpdatedAt();
				$lastidsend=$data_collection->getLastItem()->getId();
	
				foreach ( $data_collection as $order ) {
	
					$items = $order->getAllVisibleItems();
					foreach ( $items as $item ) {
						$orderArray = array ();
						$orderArray ['entity_id'] = $order->getData ( 'entity_id' );
						$orderArray ['order_id'] = $order->getData ( 'entity_id' );
						$orderArray ['created_at'] = $order->getData ( 'created_at' );
						$orderArray ['updated_at'] = $order->getData ( 'updated_at' );
						$orderArray ['status'] = $order->getData ( 'status' );
						$orderArray ['subtotal'] = $order->getData ( 'subtotal' );
						$orderArray ['base_subtotal'] = $order->getData ( 'base_subtotal' );
						$orderArray ['grand_total'] = $order->getData ( 'grand_total' );
						$orderArray ['base_grand_total'] = $order->getData ( 'base_grand_total' );
						$orderArray ['payment_method'] = $order->getPayment()->getData('method');
						$orderArray ['coupon_code'] = $order->getData ( 'coupon_code' );
						$orderArray ['increment_id'] = $order->getData ( 'increment_id' );
						$orderData = $order->getData();
						$orderArray ['order_data'] = $orderData;
	
						$orderArray ['customer_id'] = $order->getData ( 'customer_id' );
						$orderArray ['email'] = $order->getData ( 'customer_email' );
						$orderArray ['customer_firstname'] = $order->getData ( 'customer_firstname' );
						$orderArray ['customer_middlename'] = $order->getData ( 'customer_middlename' );
						$orderArray ['customer_lastname'] = $order->getData ( 'customer_lastname' );
						$orderArray ['customer_dob'] = $order->getData ( 'customer_dob' );
						$orderArray ['customer_group_id'] = $order->getData ( 'customer_group_id' );
						$orderArray ['customer_is_guest'] = $order->getData ( 'customer_is_guest' );
						$orderArray ['customer_prefix'] = $order->getData ( 'customer_prefix' );
						$orderArray ['customer_suffix'] = $order->getData ( 'customer_suffix' );
						$orderArray ['customer_taxvat'] = $order->getData ( 'customer_taxvat' );
						$orderArray ['customer_note'] = $order->getData ( 'customer_note' );
	
						/**currency type*/
						$orderArray ['global_currency_code']=$order->getData ( 'global_currency_code' );
						$orderArray ['base_currency_code']=$order->getData ( 'base_currency_code' );
						$orderArray ['order_currency_code']=$order->getData ( 'order_currency_code' );
						$orderArray ['store_currency_code']=$order->getData ( 'store_currency_code' );
	
	
	
						$billingAddress = $order->getBillingAddress();
						$shippingAddress = $order->getShippingAddress();
						$orderArray ['billing_address'] = $billingAddress;
						$orderArray ['shipping_address'] = $shippingAddress;
	
						$orderArray ['product_id'] = $item->getData ( 'product_id' );
						$orderArray ['sku'] = $item->getData ( 'sku' );
						$orderArray ['quantity'] = $item->getData ( 'qty_ordered' );
						$orderArray ['price'] = $item->getData ( 'price_incl_tax' );
						$orderArray ['discount'] = $item->getData ( 'discount_amount' );
						$orderArray ['base_price']=$item->getData ( 'base_price' );
						$orderArray ['base_discount']=  $item->getData ( 'base_discount_amount' );
						$orderArray ['original_price']=$item->getData ( 'original_price' );
						$orderArray ['base_original_price']=$item->getData ( 'base_original_price' );
	
						/* if($parent = $item->getParentItem()){
						 $parent_sku = $parent->getProduct()->getSku();
						 if ($parent_sku != null || $parent_sku != "")
						 {
						 $orderArray ['sku'] = $parent_sku;
						 }
						} */
						$prod = $objectManager->create('Magento\Catalog\Model\Product')->load( $orderArray ['product_id']);
						$categoryIds = $prod->getCategoryIds();
						if (isset($categoryIds[0])){
							$_categoryids = array();
							$parentCategory="";
	
							$orderArray["category_info"] = array();
							foreach ( $categoryIds as $_category ) {
								$category = $objectManager->create('Magento\Catalog\Model\Category')->load($_category);
								$cat_path = $category->getPath();
								$orderArray["category_info"][] = $cat_path;
	
								$childCategories = $category->getChildrenCount();
								$parentCategory=$_category;
								if($childCategories == "0")
								{
									$_categoryids[] = $_category;
								}
							}
	
							if(count($_categoryids)==0 && $parentCategory != "" ){
								$_categoryids[] = $parentCategory;
							}
							if(count($_categoryids) > 0)
							{
								$orderArray ["category_id"] = $_categoryids[0];
								//$orderArray ['root_category_id'] = Mage::helper('retail_analytics/categoryservices')->getRootCatId($orderArray ["category_id"] );
							}
						}
	
						$storeId = $order->getStoreId();
						$orderArray ['store_id'] = $storeId;
						$storeManager = $objectManager->get('Magento\Store\Model\StoreManagerInterface');
						$orderArray ['website_id'] =  $storeManager->getStore($storeId)->getWebsiteId();
						$data [] = $orderArray;
					}
				}
	
				$retObj ['data'] = $data;
				$retObj ['lastdate'] = $lastdatesend;
				if($lastdate != $lastdatesend  )
				{
					$lastidsend=0;
				}
				else if($RowCount<$limit)
				{
					$lastidsend=0;
					$duration = 1;
					$dateinsec = strtotime($lastdatesend);
					$lastdatesend = $dateinsec+$duration;
					$lastdatesend = date('Y-m-d H:i:s',$lastdatesend);
					$retObj ['lastdate'] = $lastdatesend;
				}
				$retObj ['lastid'] = $lastidsend;
				if ($data_collection->count () < $limit && $lastid==0)
				{
					$retObj ['islast'] = true;
				}
				else
				{
					$retObj ['islast'] = false;
				}
			} else {
				$duration = 1;
				$dateinsec = strtotime($lastdate);
				$lastdatesend = $dateinsec+$duration;
				$lastdatesend = date('Y-m-d H:i:s',$lastdatesend);
				$retObj ['lastdate'] = $lastdatesend;
				$retObj ['lastid'] = 0;
				if($lastid>0)
				{
					$retObj ['islast'] = false;
				}
				else
					$retObj ['islast'] = true;
				$retObj ['data'] = $data;
			}
	
			return $retObj;
		} catch ( Exception $e ) {
			$retObj ['lastid'] = -1;
			$retObj ['lastdate'] = $lastdate;
			$retObj ['islast'] = false;
			$retObj ['data'] = $data;
			return $retObj;
		}
	}
	
	public function raaProductsFinalPrice($lastId, $limit,$imagetype,$width ,$height,$isadmin=false, $filterKey="",$filterValue="") {
		$retObj = array ();
		$data = array ();
		$new_lastId = 0;
		try {
			
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$data_collection = $objectManager->create('Magento\Catalog\Model\Product')->getCollection()->addFieldToFilter ( 'entity_id', array (
					"gt" => $lastId
			) );
			if($isadmin != false)
			{
			    //$data_collection->addAttributeToFilter('status', array('eq' => 0));
			   
			}
			
			if($filterKey!=""){
				if($filterKey=="website_id"){
					$data_collection = $data_collection->addWebsiteFilter($filterValue);
				}
				else if($filterKey=="store_id"){
					$data_collection = $data_collection->addStoreFilter($filterValue);
					//Mage::app()->setCurrentStore($filterValue);
				}
			}
			$data_collection->getSelect ()->limit ( $limit );
			$imagetype = "product_page_image_small";
			if ($data_collection->count () > 0) {
				$lastId = $data_collection->getLastItem ()->getId ();
				foreach ( $data_collection as $prod ) {
					$product = $objectManager->create('Magento\Catalog\Model\Product')->load($prod->getId ());
					$productStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($product->getId());
					$store = $objectManager->get('Magento\Store\Model\StoreManagerInterface')->getStore();
					
					$reviewFactory = $objectManager->create('Magento\Review\Model\ReviewFactory') ;
					$ratingCollection = $objectManager->create('\Magento\Review\Model\ResourceModel\Review\Summary\Collection') ;
					
					$productArray = array ();
					$productArray ['product_id'] = $product->getData ( 'entity_id' );
					$productArray ['sku'] = $product->getData ( 'sku' );
					$productArray ['name'] = $product->getData ( 'name' );
					$price = $product->getPrice ();
					$productArray ['price'] = $price;
					$productArray ['special_price'] = $product->getFinalPrice ();
					$productArray ['status'] = $product->getAttributeText("status");
					$productArray ['visibility'] =  $product->getAttributeText("visibility");
					$productArray ['instock'] = $product->getIsInStock ();
					$productArray ['quantity'] = $productStockObj->getQty ();
					$productArray ['url'] = $product->getProductUrl ();
					$productArray ['imageurl'] = $store->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . 'catalog/product' . $product->getImage();
					$imageHelper  = $objectManager->get('\Magento\Catalog\Helper\Image');

					$productArray ['cacheimageurl'] = $imageHelper->init($product, $imagetype)->setImageFile($product->getFile())->resize($width, $height)->getUrl();
					//$productArray ['cacheimageurl'] = $imageHelper->init($prod, $imagetype)->setImageFile($prod->getFile())->resize($width, $height)->getUrl();
					$reviewFactory->create()->getEntitySummary($product, $store->getId());
					$ratingSummary = $product->getRatingSummary();
					$ratings = 0;
					$ratingcount = 0;
					if ($ratingSummary) {
						$ratings = $ratingSummary['rating_summary'];
						$ratingcount = $ratingSummary['reviews_count'];
					}
					$productArray ['ratings'] = $ratings;
					$productArray ['ratingcount'] = $ratingcount;
					$discountPercent = 0;
					if ($productArray ["special_price"] != $price && $price!=0) {
						$discountPercent = (($price - $productArray ["special_price"]) * 100)/$price;
					}
	
					$productArray ["discount_percent"] = $discountPercent;
	
					if($product->getTypeID() == "configurable")
					{
						$productArray ["product_child"] = array();
						$productArray ["child_sku"] = array();
						$totalQty = 0;
						$childProducts = $prod->getTypeInstance()->getUsedProducts($prod);
						foreach($childProducts as $child) {
							$productArray ["product_child"][] = $child->getId();
							$productArray ["child_sku"][] = $child->getSku();
							$childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
							$totalQty = ($totalQty + $childProductStockObj->getQty ());
						}
							
						$productArray ["quantity"] = $totalQty;
					}
					else if($prod->getTypeID() == "grouped")
					{
					    $productArray ["product_child"] = array();
					    $productArray ["child_sku"] = array();
					    $totalQty = 0;
					    $childProducts = $prod->getTypeInstance(true)->getAssociatedProducts($product);
					    
					    foreach($childProducts as $child) {
					        $productArray ["product_child"][] = $child->getId();
					        $productArray ["child_price"][] = $child->getFinalPrice();
					        $productArray ["child_sku"][] = $child->getSku();
					        $childProductStockObj = $objectManager->get('Magento\CatalogInventory\Api\StockRegistryInterface')->getStockItem($child->getId());
					        $totalQty = ($totalQty + $childProductStockObj->getQty ());
					    }
					    
					    $productArray ["quantity"] = $totalQty;
					}
	
					$data [] = $productArray;
				}
				$retObj ['data'] = $data;
				$retObj ['lastid'] = $lastId;
				if ($data_collection->count () < $limit) {
					$retObj ['islast'] = true;
				} else {
					$retObj ['islast'] = false;
				}
			} else {
				$retObj ['lastid'] = $lastId;
				$retObj ['islast'] = true;
				$retObj ['data'] = $data;
			}
	
			return $retObj;
		} catch ( Exception $e ) {
	
			$retObj ['lastid'] = - 1;
			$retObj ['islast'] = false;
			$retObj ['data'] = $data;
			return $retObj;
		}
	}
	
	public function raaStoreCounts() {
		$data = array ();
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$customers = $objectManager->create('Magento\Customer\Model\Customer')->getCollection ();
			$data["Customer"] = $customers->getSize();
			$products = $objectManager->create('Magento\Catalog\Model\Product')->getCollection ();
			$data["Product"] = $products->getSize();
			$orders = $objectManager->create('Magento\Sales\Model\Order')->getCollection ();
			$data["Order"] = $orders->getSize();
				
			return $data;
		} catch ( Exception $ex ) {
			return $data;
		}
	}
}