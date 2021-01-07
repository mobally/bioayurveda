<?php 
namespace Eighteentech\ShippingNotification\Helper;
use Magento\Store\Model\Store;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	const XML_PATH_ACTIVE  = 'eighteentech_shippingNotification/shippingNotification/enabled';
	const XML_PATH_NOTIFICATION  = 'eighteentech_shippingNotification/shippingNotification/notification';
	const XML_EXPIRE_TIME  = 'eighteentech_shippingNotification/shippingNotification/cookie_time';
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) 
    {
        parent::__construct($context);   
    }
	
	public function getEnabled($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_ACTIVE, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
	public function getNotification($store = null){
		return $this->scopeConfig->getValue(self::XML_PATH_NOTIFICATION, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
	public function getExpireTime($store = null){
		return $this->scopeConfig->getValue(self::XML_EXPIRE_TIME, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);
	}
}
