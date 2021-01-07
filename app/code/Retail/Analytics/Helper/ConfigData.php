<?php
namespace Retail\Analytics\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\Module\Manager;
use Magento\Framework\HTTP\PhpEnvironment\RemoteAddress;
use Magento\Framework\Stdlib\CookieManagerInterface;



class  ConfigData extends AbstractHelper {
	
	protected $scopeConfig;
	protected $modelRaaConfigFactory;
	protected $moduleManager;
	protected $remoteAddress;
	protected $jsonHelper;
	protected $_cookieManager;
	
	public function __construct(
			\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
			\Retail\Analytics\Model\Raaconfig $modelRaaConfigFactory,
			Manager $moduleManager,
			RemoteAddress $RemoteAddress,
			\Magento\Framework\Json\Helper\Data $jsonHelper,
			\Magento\Store\Model\StoreManagerInterface $storeManager,
			CookieManagerInterface $cookieManager
	) {
		$this->scopeConfig = $scopeConfig;
		$this->modelRaaConfigFactory = $modelRaaConfigFactory;
		$this->moduleManager = $moduleManager;
		$this->remoteAddress = $RemoteAddress;
		$this->jsonHelper = $jsonHelper;
		$this->storeManager = $storeManager;
		$this->_cookieManager = $cookieManager;
	}
	
	/**
	 * Path to get client specific resource directory .
	 */
	const XML_PATH_RESOURCEDIR = 'Retail_Analytics/settings/resourcedir';
	
	
	/**
	 * Path to cached image width .
	 */
	const XML_PATH_IMAGE_WIDTH = 'Retail_Analytics/settings/imagewidth';
	
	/**
	 * Path to cached image height .
	 */
	const XML_PATH_IMAGE_HEIGHT = 'Retail_Analytics/settings/imageheight';
	
	/**
	 * Path to retailreco image type.
	 */
	const XML_PATH_IMAGE_TYPE = 'Retail_Analytics/settings/imagetype';
	
	/**
	 * Path to retailreco plugin version.
	 */
	const XML_PATH_VERSION = 'Retail_Analytics/settings/version';
	
	
	 /**
     * Path to store config raa module enabled state.
     */
    const XML_PATH_ENABLED = 'Retail_Analytics/settings/enabled';

    /**
     * Path to store config raa service server address.
     */
    const XML_PATH_SERVER = 'Retail_Analytics/settings/server';   
     
    /**
     * Path to store config raa service server resourceserver.
     */
    const XML_PATH_RESOURCESERVER = 'Retail_Analytics/settings/resourceserver';
    
    
    /**
     * Path to store config raa service server address.
     */
    const XML_PATH_ALLOW_IP = 'Retail_Analytics/settings/allowip';
    
    /**
     * Path to store config raa service account name.
     */
    const XML_PATH_ACCOUNT = 'Retail_Analytics/settings/account';

    /**
     * Path to store config raa service prediction.
     */
    const XML_PATH_PREDICTION = 'Retail_Analytics/settings/prediction';
    
    /**
     * Path to the store config collect_email_addresses option.
     */
    const XML_PATH_COLLECT_EMAIL_ADDRESSES = 'Retail_Analytics/tagging_options/collect_email_addresses';
    
    /**
     * Path to store config raa service customer.
     */
    const XML_PATH_CUSTOMER = 'Retail_Analytics/settings/customer';
    /**
     * Path to store config raa service product.
     */
    const XML_PATH_PRODUCT = 'Retail_Analytics/settings/product';
    /**
     * Path to store config raa service attribute.
     */
    const XML_PATH_ATTRIBUTES = 'Retail_Analytics/settings/attributes';
    /**
     * Path to store config raa service cart.
     */
    const XML_PATH_CART = 'Retail_Analytics/settings/cart';
    
    /**
     * Path to issynchronousreco .
     */
    const XML_PATH_ISSYNCHRONOUSRECO = 'Retail_Analytics/settings/issynchronousreco';
    /**
     * RAA SERVICES PROJECT NAME.
     * 
     */
    
    /**
     * Path to developmentmodeemail .
     */
    const XML_PATH_DEVELOPMENTMODEEMAIL = 'default/settings/developmentmodeemail';

    /**
     * Path to enablepush .
     */
    const XML_PATH_ENABLEPUSH = 'Retail_Analytics/settings/enablepush';
    
    /**
     * Path to enablemyshop .
     */
    const XML_PATH_ENABLEMYSHOP = 'Retail_Analytics/settings/enablemyshop';
    
    /**
     * Path to gatrackingid .
     */
    const XML_PATH_GATRACKINGID = 'Retail_Analytics/settings/gatrackingid';
     
    
    public $raa_service = "RAService";
    const XML_PATH_RASERVICE = 'Retail_Analytics/settings/raservice';
    
    /**
     * RAA Admin PROJECT NAME.
     */
    public $raa_admin = "RAAdmin";
    const XML_PATH_RAADMIN = 'Retail_Analytics/settings/raadmin';
    
    public function getRaaconfig($key) {
    
    	$value = "";
    	try {
    		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    		$raaconfig_collection = $this->modelRaaConfigFactory->getCollection ()->addFieldToFilter ( 'raakey', array ($key) );
    		if($raaconfig_collection->count() > 0) {
    			$value = $raaconfig_collection->getFirstItem()->getRaavalue();
    		}    		 
    	
    	}
    	catch ( Exception $e ) {
    		return $value;
    	}
    
    	return $value;
    }
   
public function raaIsJson($json) {
    
    	$result = is_object(json_decode($json));
    	if(json_last_error() == JSON_ERROR_NONE) {
    		return true;
    	} else {
    		return false;
    	}
    }
    
    public function raaJsonEncode($data) {
    
    	$json;
    	try {
    		$json =  $this->jsonHelper->jsonEncode($data);
    	}
    	catch(Exception $e)
    	{
    		$json =  json_encode($data);
    	}
    
    	return  $json ;
    
    }
    
    
    public function raaJsonDecode($json) {  
    	  		
    	$data = array();
        try   {        	
        	$data = $this->jsonHelper->jsonDecode($json);
        }
        catch(Exception $e)
        {
        	$data =  json_decode($json);
        }  
        
        return  $data ;
    	
    }
     
    
    
    public function getRAAServicesName() {    	
    	$raservices = $this->getRaaconfig("raservice");
    	if($raservices == "")
    	{
    		$raservices = $this->raa_service;
    	}
    	return $raservices;
    }
    
  
    
    public function getRAAdminName() {    	    	
    	$raadmin = $this->getRaaconfig("raadmin");
    	if($raadmin == "")
    	{
    		$raadmin = $this->raa_admin;
    	}
    	return $raadmin;
    }
    
    
    
	/**
	 * Check if module exists and enabled in global config.
	 * Also checks if the module is enabled for the current store and if the needed criteria has been provided for the
	 * module to work.
	 *
	 * @param string $moduleName the full module name, example Mage_Core
	 *
	 * @return boolean
	 */
 	public function isModuleEnabled($moduleName = null)
    {
        if (!parent::isModuleEnabled($moduleName) || !$this->getEnabled() || !$this->getAccount()) {
            return false;
        }

        return true;
    }
    
    public function raaModulesStatus() {
    	$data = array();
    	try{
    		
	    	$data['Retail_Analytics'] = $this->moduleManager->isOutputEnabled('Retail_Analytics');
	    	//$data['Retail_Coupon'] = Mage::helper('core')->isModuleEnabled('Retail_Coupon');
	    	//$data['Retail_Log'] = Mage::helper('core')->isModuleEnabled('Retail_Log');	 
	    	$data['Predictive Email Enable'] = $this->getEnabled();
	    	return $data;
    	}
    	catch ( Exception $e ) {
    		echo false;
    	}
    
    }
    
    
    /**
     * Builds a tagging string of the given category including all its parent categories.
     * The categories are sorted by their position in the category tree path.
     *
     * @param Mage_Catalog_Model_Category $category
     *
     * @return string
     */
    public function buildCategoryString($category)
    {
    	$data = array();
    
    	if ($category instanceof Mage_Catalog_Model_Category) {
    		/** @var $categories Mage_Catalog_Model_Category[] */
    		$categories = $category->getParentCategories();
    		$path = $category->getPathInStore();
    		$ids = array_reverse(explode(',', $path));
    		foreach ($ids as $id) {
    			if (isset($categories[$id]) && $categories[$id]->getName()) {
    				$data[] = $categories[$id]->getName();
    			}
    		}
    	}
    
    	if (!empty($data)) {
    		return DS . implode(DS, $data);
    	} else {
    		return '';
    	}
    }
    
    /**
     * Formats date into raa format, i.e. Y-m-d.
     *
     * @param string $date
     *
     * @return string
     */
    public function getFormattedDate($date)
    {
    	return date('Y-m-d', strtotime($date));
    }
    
    public function getIsSynchronousReco($store = null)
    {
    	$issynchronousreco = $this->getRaaconfig("issynchronousreco");
    	if($issynchronousreco == "") {
    		$issynchronousreco =  $this->scopeConfig->getValue(self::XML_PATH_ISSYNCHRONOUSRECO, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    	return $issynchronousreco;
    }
    
	public function getDevelopmentmodeEmail($store = null)
    {
    	$developmentmodeemail = $this->getRaaconfig("developmentmodeemail");
    	if($developmentmodeemail == "") {
    		$developmentmodeemail =  $this->scopeConfig->getValue(self::XML_PATH_DEVELOPMENTMODEEMAIL,\Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    	return $developmentmodeemail;
    }
    
    public function getEnablePush($store = null)
    {
    	$enablepush = $this->getRaaconfig("enablepush");
    	if($enablepush == "") {
    		$enablepush =  $this->scopeConfig->getValue(self::XML_PATH_ENABLEPUSH, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    	 
    	return $enablepush;
    }
    
    public function getGATrackingId($store = null)
    {
    	$gatrackingid = $this->getRaaconfig("gatrackingid");
    	if($gatrackingid == "") {
    		$gatrackingid =  $this->scopeConfig->getValue(self::XML_PATH_GATRACKINGID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    
    	return $gatrackingid;
    }
    
    public function getWebPushId($store = null)
    {
    	$webpushid = $this->getRaaconfig("webpushid");
    	 return $webpushid;
    }
    
    public function getEnableMyshop($store = null)
    {
    	$enablemyshop = $this->getRaaconfig("enablemyshop");
    	if($enablemyshop == "") {
    		$enablemyshop =  $this->scopeConfig->getValue(self::XML_PATH_ENABLEMYSHOP, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    
    	return $enablemyshop;
    }
      
    
    public function getImageType($store = null)
    {
    	$imagetype = $this->getRaaconfig("imagetype");
    	if($imagetype == "")
    	{
    		$imagetype = $this->scopeConfig->getValue(self::XML_PATH_IMAGE_TYPE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    	
    	$imagetype = ($imagetype == "")?"product_page_image_small":$imagetype;
    	return $imagetype;
    }    
    
    public function getImageWidth($store = null)
    {    	  	
    	$imagewidth = $this->getRaaconfig("imagewidth");
    	if($imagewidth == "") {
    		$imagewidth = $this->scopeConfig->getValue(self::XML_PATH_IMAGE_WIDTH, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    	
    	return $imagewidth;
    }
    
    public function getImageHeight($store = null)
    {    	
    	$imageheight = $this->getRaaconfig("imageheight");
    	if($imageheight == "") {
    		$imageheight =  $this->scopeConfig->getValue(self::XML_PATH_IMAGE_HEIGHT, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}
    	return $imageheight;
    }
    
    public function getPageImageWidth($page)
    {
    	$imagewidth = $this->getRaaconfig("imagewidth_".$page);
    	if($imagewidth == "") {
    		$imagewidth = $this->getImageWidth();
    	}
    	 
    	return $imagewidth;
    }
    
    public function getPageImageHeight($page)
    {
    	$imageheight = $this->getRaaconfig("imageheight_".$page);
    	if($imageheight == "") {
    		$imageheight = $this->getImageHeight();
    	}
    	return $imageheight;
    }
    
    
  
    
    public function getResourcedir($store = null)
    {
    	$resourcedir = $this->getRaaconfig("resourcedir");
    	if($resourcedir == "") {
    		$resourcedir = $this->scopeConfig->getValue(self::XML_PATH_RESOURCEDIR, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    	}    
    		    	
    	return $resourcedir;
    }
    
    /**
     * Return plugin vertion.
     *
     * @param mixed $store
     *
     * @return string
     */
    public function getVersion($store = null)
    {
    	return $this->scopeConfig->getValue(self::XML_PATH_VERSION, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
    }
	
	/**
	 * Return if the module is enabled.
	 *
	 * @param mixed $store
	 *
	 * @return boolean
	 */
	public function getEnabled($store = null)
	{
		return $this->scopeConfig->getValue(self::XML_PATH_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
	}
	
	/**
	 * Return the server address to the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return string
	 */
	public function getServer($store = null)
	{
		$server =  $this->getRaaconfig("server");
		if($server == "") {
			$server = $this->scopeConfig->getValue(self::XML_PATH_SERVER, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
		}		
		return $server;
	}
	
	public function getResourceServer($store = null)
	{
		$resourceserver =  $this->getRaaconfig("resourceserver");
		if($resourceserver == "") {
			
			$resourceserver = $this->scopeConfig->getValue(self::XML_PATH_RESOURCESERVER, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
		}	
		
		if($resourceserver == "") {
			$resourceserver = $this->getServer();;
		}
		
		return $resourceserver;
	}
	
	/**
	 * Return the account name that is used by this store to access the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return string
	 */
	public function getAccount($store = null)
	{
		$account = $this->getRaaconfig("account");
		if($account == "")
		{
			$account = $this->scopeConfig->getValue(self::XML_PATH_ACCOUNT, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
		}
		return $account;
	}
	
	/**
	 * Return if customer email addresses should be collected.
	 *
	 * @param mixed $store
	 *
	 * @return boolean
	 */
	public function getCollectEmailAddresses($store = null)
	{
		return (boolean)$this->scopeConfig->getValue(self::XML_PATH_COLLECT_EMAIL_ADDRESSES, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
	}
	/**
	 * Return the account name that is used by this store to access the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return string
	 */
	public function getCustomer($store = null)
	{
		return $this->scopeConfig->getValue(self::XML_PATH_CUSTOMER, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
	}
	/**
	 * Return the account name that is used by this store to access the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return string
	 */
	public function getProduct($store = null)
	{
		return $this->scopeConfig->getValue(self::XML_PATH_PRODUCT, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
	}
	/**
	 * Return the account name that is used by this store to access the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return string
	 */
	public function getCart($store = null)
	{
		return $this->scopeConfig->getValue(self::XML_PATH_CART, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
	}
	/**
	 * Return the product attributes name that is used by this store to access the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return string
	 */
	public function getAttributes($store = null)
	{
		return $this->scopeConfig->getValue(self::XML_PATH_ATTRIBUTES, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
	}
	
	/**
	 * Return the prediction value that is used by this store to access the raa service.
	 *
	 * @param mixed $store
	 *
	 * @return boolean
	 */
	public function getPrediction($store = null)
	{
		$prediction = $this->getRaaconfig("prediction");
		if($prediction == "")
		{
			$prediction = $this->scopeConfig->getValue(self::XML_PATH_PREDICTION, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
		}
		
		$prediction = ($prediction == "")?true:$prediction;
		return $prediction;
	}
		
	
	function raaValidateIP($store = null) {
		try {
			
			$allowip  = $this->getRaaconfig("allowip");
			if($allowip == "")
			{
				$allowip = $this->scopeConfig->getValue(self::XML_PATH_ALLOW_IP, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
			}
			
			if($allowip == "" || $allowip == null)
			{	
				return true;
			} 
			else 
			{
				$allowipArray = explode(',', $allowip);			
				$ipaddress = $this->getExternalIP();			
				if (in_array($ipaddress, $allowipArray)) {
					return true;
				} else {
					return false;
				}
			}	
		} catch ( Exception $e ) {			
			return true;
		}
	}
	
	function raaValidateDefaultIP($store = null) {
		try {				
			
				$allowipArray = array("104.199.151.78","104.155.226.59","183.182.85.106");
				$ipaddress = $this->getExternalIP();
				if (in_array($ipaddress, $allowipArray)) {
					return true;
				} else {
					return false;
				}
			
		} catch ( Exception $e ) {
			return true;
		}
	}
	
	
	function getClientIP() {
		$ipaddress = '';
		$ipaddress = $this->remoteAddress->getRemoteAddress(false);
		return $ipaddress;
	}	
	function getDomainID() {
		$domainid = '';
		$domainid = $_SERVER['HTTP_HOST'];
		return $domainid;
	}
		
	
	public function validateServerAccount() {
		
		$result = "";
		
		try {			
			
			$url = '/api/rest/validate/';
			$raa_server = $this->getServer ();
			$raa_services = $this->getRAAServicesName();
			$raa_account = $this->getAccount ();
			$server_url = $raa_server .'/'.$raa_services.'/'. $url . $raa_account;
			$curl = curl_init ( $server_url );
			curl_setopt ( $curl, CURLOPT_HEADER, false );
			curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $curl, CURLOPT_HTTPHEADER, array ("Content-type",	"application/x-www-form-urlencoded") );					
					curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
					$result = curl_exec ( $curl );
					//$result = Mage::helper ( 'core' )->jsonDecode ( $result );
					$result =$this->raaJsonDecode( $result );
					Mage::log ( $server_url . ' response  : ' . Mage::helper ( 'core' )->jsonEncode( $result) );
					curl_close ( $curl );
					return $result;
		} catch ( Exception $e ) {
			$result = $e->getMessage() ;
			return $result;
		}
		
		
	}
	
	public function getCurrentCategory()
	{
		$categoryid = "";
		try {
		$current_category = Mage::registry('current_category');
		if($current_category != null)
		{
			$categoryid = $current_category->getId();
		}
		
		return $categoryid;
		} catch ( Exception $e ) {			 
			return $categoryid;
		}
	} 
	
	function getExternalIP() {
				
		$ipaddress = "";
		try {
			$ipaddress = Mage::helper('core/http')->getRemoteAddr(false);
			if($ipaddress == "" || $ipaddress == null) {
				$ipaddress = $_SERVER['REMOTE_ADDR'];
			}
			return $ipaddress;
		} catch ( Exception $e ) {
			return $ipaddress;
		}
	}
	
	public function getInternalIp()
	{
		$internalip = "999";
		try {
			$internalip = $this->_cookieManager->getCookie('rainternalip');
			if(($internalip == null || $internalip == "" ) && isset($_COOKIE['rainternalip'])) {
				$internalip = $_COOKIE['rainternalip'];
			}			
			$internalip = ($internalip == null || $internalip == "")?"999":$internalip;	
			return $internalip;
			
		} catch ( Exception $e ) {
			return $internalip;
		}
	}
	
	function setRas() {
		$params = Mage::app()->getRequest ()->getParams ();
		if (isset($params['ras']))
		{
			$racv = $this->getRaaConfig('racv');
			$racv = ($racv == "" || $racv == null)?1:intval($racv);
			Mage::getModel('core/cookie')->set('ras','retailreco', time()+(3600 * $racv));
		}
	}	

	function getRas() {
		$ras = Mage::getModel('core/cookie')->get('ras');
		if($ras == null || $ras == "") {
			if(isset($_COOKIE['ras'])) {				
				$ras = $_COOKIE['ras'];
			}
		}
		
		$ras = ($ras == null || $ras == "" )?"":$ras;
		return $ras;
	}
	
	function getModuleConfig($path,$store = null)
	{		
		//echo $path;
		echo $this->scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);		
	}
	
	function showCheckAllowIP() {
		try {
	
			$allowip  = $this->getRaaconfig("allowip");
			if($allowip == "")
			{
				$allowip = $this->scopeConfig->getValue(self::XML_PATH_ALLOW_IP, \Magento\Store\Model\ScopeInterface::SCOPE_STORE,$store);
			}
	
			
			if($allowip == "" || $allowip == null)
			{
				echo true;
			}
			else
			{
				$allowipArray = explode(',', $allowip);
				echo ' allowip : ' .var_dump($allowipArray).'<br>';
				$ipaddress = $this->getExternalIP();
				echo 'your ip : ' . $ipaddress;
	
				if (in_array($ipaddress, $allowipArray)) {
					echo true;
				} else {
					echo false;
				}
	
			}
		} catch ( Exception $e ) {
			echo $e->getMessage();
		}
	}	
	
	function getProductType( $productud )
	{
			$type = "";
			$product = Mage::getModel('catalog/product')->load($productid);
			if (!$product) {
				$type = $product->getType();
			}
						
			return $type;
	}
    
	public function raaGetStores() {
		$dataArray = array ();
		try {
			foreach ( $this->storeManager->getWebsites () as $website ) {
				$data = array ();
				$data ["website"] = $website ["name"];
				$data ["websiteid"] = $website ["website_id"];
				$data ["websitecode"] = $website ["code"];
				$data ["store"] = array ();
				foreach ( $website->getGroups () as $store ) {
					$storedata = array ();
					$storedata ["storename"] = $store ["name"];
					$storedata ["storeid"] = $store ["group_id"];
					$storedata ["rootcategoryid"] = $store ["root_category_id"];
					$storedata ["view"] = array ();
					$stores = $store->getStores ();
					foreach ( $stores as $storeview ) {
						$viewdata = array ();
						$viewdata ["viewname"] = $storeview ["name"];
						$viewdata ["viewid"] = $storeview ["store_id"];
						$viewdata ["isactive"] = $storeview ["is_active"];
						$viewdata ["viewcode"] = $storeview ["code"];
						$viewdata ["homeurl"] = $storeview->getHomeUrl();
						$storedata ["view"] [] = $viewdata;
					}
					$data ["store"] [] = $storedata;
				}
				$dataArray [] = $data;
			}
			return $dataArray;
		} catch ( Exception $e ) {
			return $dataArray;
		}
	}
    
    
  }