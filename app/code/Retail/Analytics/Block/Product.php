<?php
/**
 *
 * @author Re Solutions Ltd <contact@nosto.com>
 * @copyright 2017 Nosto Solutions Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 *
 */

namespace Retail\Analytics\Block;

/**
 * Product block used for outputting meta-data on the stores product pages.
 * This meta-data is sent to Raa via JavaScript when users are browsing the
 * pages in the store.
 */
class Product extends \Magento\Framework\View\Element\Template 
{
  
	protected $_registry; 
	protected $_storeManager;
	
	/**
	 * Constructor.
	 *
	 * @param Context $context the context.
	 * @param \Magento\Framework\Registry $registry.
	 * @param \Magento\Store\Model\StoreManagerInterface $storeManage

	 * @SuppressWarnings(PHPMD.ExcessiveParameterList)
	 */
	public function __construct( \Magento\Backend\Block\Template\Context $context, 
			\Magento\Framework\Registry $registry, array $data = [],\Magento\Store\Model\StoreManagerInterface $storeManager ) 
	{ 
		$this->_registry = $registry;
		$this->_storeManager = $storeManager;
		parent::__construct($context, $data);
	}
    

    /**
     * Returns the current product DTO.
     *
     * @return \Magento\Catalog\Model\Product the product meta data model.
     */
    public function getRaaProduct()
    {
        return $this->_registry->registry('current_product');
    }
    
    /**
     * Returns the current category DTO.
     *
     * @return \Magento\Catalog\Model\Product the product meta data model.
     */
    public function getRaaCategoryId()
    {
    	$categoryid="";
    	$current_category = $this->_registry->registry('current_category');
    	if($current_category != null)
    	{
    		$categoryid = $current_category->getId();
    	}
    	
    	return $categoryid;
    }
    
    /**
     * Returns the current store currency.
     *
     * @return string|null the current currency code
     */
    public function getCurrentCurrencyCode()
    {
    	return $this->_storeManager->getStore()->getCurrentCurrencyCode();
    }
    
    /**
     * Returns the base store currency.
     *
     * @return string|null the base currency code
     */
    public function getBaseCurrencyCode()
    {
    	return $this->_storeManager->getStore()->getBaseCurrencyCode();
    }

}
