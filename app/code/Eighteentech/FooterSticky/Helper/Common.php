<?php
/**
 * Copyright © 2015 Eighteentech . All rights reserved.
 */
namespace Eighteentech\FooterSticky\Helper;
class Common extends \Magento\Framework\App\Helper\AbstractHelper
{
	const XML_PATH_SELECTED_CATEGORY = 'wd_homebanner/select_category/category';
	const XML_PATH_SECRETS_PACKS = 'wd_homebanner/select_category/secrets_packs';
	const XML_PATH_GIFT_VOUCHERS = 'wd_homebanner/select_category/gift_vouchers';

	protected $moduleManager;
	protected $_scopeConfig;
	protected $_categoryFactory;
	protected $_productFactory;
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context,
		\Magento\Framework\Module\Manager $moduleManager,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
		\Magento\Catalog\Model\CategoryFactory $categoryFactory,
		\Magento\Catalog\Model\ProductFactory $productFactory
	) {
		$this->moduleManager = $moduleManager;
		$this->_scopeConfig = $scopeConfig;
		$this->_categoryFactory = $categoryFactory;
		$this->_productFactory = $productFactory;
		parent::__construct($context);
	}

	public function checkModuleEnable($moduleName)
	{
		if ($this->moduleManager->isOutputEnabled($moduleName)) {
    		return true;
		} else {
		    return false;
		}
	}

	public function getSelectedCategoryId()
	{
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;
		return $this->_scopeConfig->getValue(self::XML_PATH_SELECTED_CATEGORY, $storeScope);
	}

	public function getWinePackCategoryUrl()
    {
    	$categoryId = $this->getSelectedCategoryId();
    	if ($categoryId) {
    		$categoryModel = $this->_categoryFactory->create()->load($categoryId);
    		return $categoryModel->getUrl();
    	}
    	return '#';
    }

    public function getSecretsPacksCategoryUrl()
    {
    	$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;
		$categoryId = $this->_scopeConfig->getValue(self::XML_PATH_SECRETS_PACKS, $storeScope);
    	//$categoryId = $this->getSelectedCategoryId();
    	if ($categoryId) {
    		$categoryModel = $this->_categoryFactory->create()->load($categoryId);
    		return $categoryModel->getUrl();
    	}
    	return '#';
    }

    public function getGiftProductUrl()
    {
    	$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;
		$giftId = $this->_scopeConfig->getValue(self::XML_PATH_GIFT_VOUCHERS, $storeScope);
    	//$categoryId = $this->getSelectedCategoryId();
    	if ($giftId) {
    		$productModel = $this->_productFactory->create()->load($giftId);
    		//$url=$productModel->getUrlKey();
    		//if(empty($url)){
    			$url= $productModel->getProductUrl();
    		//}   		
    		
    		return $url;
    	}
    	return '#';
    }
}
