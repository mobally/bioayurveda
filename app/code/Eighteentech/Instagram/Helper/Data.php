<?php 
namespace Eighteentech\Instagram\Helper;
use Magento\Store\Model\Store;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	const XML_PATH_ACTIVE  = 'eighteentech_instagram/instagram/enabled';
	const XML_PATH_INSTAGRAM_USERID  = 'eighteentech_instagram/instagram/userId';
	const XML_PATH_INSTAGRAM_CLIENTID  = 'eighteentech_instagram/instagram/clientId';
	const XML_PATH_INSTAGRAM_ACCESSTOKEN  = 'eighteentech_instagram/instagram/accessToken';
	const XML_PATH_INSTAGRAM_FOLLOWBLOCK = 'eighteentech_instagram/instagram/followBlock';
	protected $_customerSession;
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) 
    {
        parent::__construct($context);   
    }
	
	public function getEnabled($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_ACTIVE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
	public function getUserId($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_INSTAGRAM_USERID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
	public function getClientId($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_INSTAGRAM_CLIENTID, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
	public function getAccessToken($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_INSTAGRAM_ACCESSTOKEN, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
	public function getFollowBlock($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_INSTAGRAM_FOLLOWBLOCK, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
}
