<?php
namespace Retail\Analytics\Helper;
use \Magento\Framework\App\Helper\AbstractHelper;


class Raaconfig extends AbstractHelper
{
	protected $_configInterface;
	
	public function __construct(
			\Magento\Framework\App\Config\ConfigResource\ConfigInterface $configInterface
	) {
		$this->_configInterface = $configInterface;
	}
	public function saveRaaModuleConfig($key, $value) {
				
		$path = "";
		
		switch ($key){
			case "server":
				$path = "'Retail_Analytics/settings/server";
				break;
			case "account":
				$path = "'Retail_Analytics/settings/account";
				break;
			case "resourcedir":
				$path = "'Retail_Analytics/settings/resourcedir";
				break;
			case "prediction":
				$path = "'Retail_Analytics/settings/prediction";
				break;
			case "imagetype":
				$path = "'Retail_Analytics/settings/imagetype";
				break;
			case "imagewidth":
				$path = "'Retail_Analytics/settings/imagewidth";
				break;
			case "imageheight":
				$path = "'Retail_Analytics/settings/imageheight";
				break;
			case "allowip":
				$path = "'Retail_Analytics/settings/allowip";
				break;
			case "issynchronousreco":
				$path = "retail_analytics/settings/issynchronousreco";
				break;
			case "developmentmodeemail":
				$path = "'Retail_Analytics/settings/developmentmodeemail";
				break;
			case "enablemyshop":
				$path = "'Retail_Analytics/settings/enablemyshop";
				break;
			case "resourceserver":
				$path = "'Retail_Analytics/settings/resourceserver";
				break;
		}
		if($path != "") {			
			$this->_configInterface->saveConfig($path, $value, 'default', 0);
		}		
	}
	
	public function saveRaaconfig($key, $value) {
		
		$this->saveRaaModuleConfig($key,$value);
		
		if(is_array($value)) {
			//$value = Mage::helper( 'core' )->jsonDecode( $value );
			$value = serialize($value);
			//$unserialized_array = unserialize($serialized_array);
		}
		
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$raaconfig_collection = $objectManager->create('Retail\Analytics\Model\Raaconfig')->getCollection ()->addFieldToFilter ( 'raakey', array ($key) );
	
		if($raaconfig_collection->count() > 0) {
			$updateconfig = $raaconfig_collection->getFirstItem();
			$updateconfig->setRaakey($key);
			$updateconfig->setRaavalue($value);			
			$updateconfig->setCreated(date('Y/m/d H:i:s'));
			$updateconfig->save();
		}	
		else 
		{	
			$raaconfig = $objectManager->create('Retail\Analytics\Model\Raaconfig');
			$raaconfig->setRaakey($key);
			$raaconfig->setRaavalue($value);
			$raaconfig->setCreated(date('Y/m/d H:i:s'));
			$raaconfig->save();
		}
	}	
	
	
	public function setRaaconfig($data) {
		try {
			foreach ( $data as $row ) {
				foreach($row as $key => $value) {
								
					$this->saveRaaconfig( $key, $value);
				}
			}
		}
		catch ( Exception $e ) {
			return false;
		}
		return true;
	}
	
	
	
	public function deleteRaaconfig($key) {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$raaconfig_collection = $objectManager->create('Retail\Analytics\Model\Raaconfig')->getCollection ()->addFieldToFilter ( 'raakey', array ($key) );
		if($raaconfig_collection->count() > 0) {
			$deleteconfig = $raaconfig_collection->getFirstItem();		
			$deleteconfig->delete();
		}	
		
	}
	
	
	public function removeRaaconfig($data) {	
	
		try {
			
			foreach ( $data as $key ) {	
					$this->deleteRaaconfig( $key);	
			}
		}			
		catch ( Exception $e ) {
			return false;
		}		
		return true;
	}	
	
		
	public function getRaaconfig($key) {
	
		$value = "";
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$raaconfig_collection = $objectManager->create('Retail\Analytics\Model\Raaconfig')->getCollection ()->addFieldToFilter ( 'raakey', array ($key) );
			if($raaconfig_collection->count() > 0) {
				$value = $raaconfig_collection->getFirstItem()->getRaavalue();
			}  
			
			return $value;
		}
		catch ( Exception $e ) {
			return $value;
		}
		
		return $value;
	}
	
	
	public function getRaaconfigs() {
		$data = array ();
		try {
			$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
			$raaconfigs = $objectManager->create('Retail\Analytics\Model\Raaconfig')->getCollection();
			foreach($raaconfigs as $raaconfig)
			{				
					$dataArray = array();
					$dataArray [$raaconfig->getData('raakey')] = $raaconfig->getData('raavalue');
					$dataArray ['created_at'] = $raaconfig->getData('created');
					$data[] =  $dataArray;				
			}
			return $data;
		} catch ( Exception $ex ) {
			return $data;
		}
	}
	
}