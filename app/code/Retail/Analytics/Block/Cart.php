<?php
/**
 *
 * @author Retail Automata Analytics <contact@retailreco.com>
 * @copyright 2018 Retail Automata Analytics Pvt Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 *
 */

namespace Retail\Analytics\Block;

/**
 * Product block used for outputting meta-data on the stores product pages.
 * This meta-data is sent to Raa via JavaScript when users are browsing the
 * pages in the store.
 */
class Cart extends \Magento\Framework\View\Element\Template 
{
  
	protected $_cartHelper;
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
			 \Magento\Checkout\Model\Cart $cart, array $data = [],\Magento\Store\Model\StoreManagerInterface $storeManager ) 
	{ 
		$this->_cart = $cart;
		$this->_storeManager = $storeManager;
		parent::__construct($context, $data);
	}
    

    /**
     * Returns the current product DTO.
     *
     * @return \Magento\Catalog\Model\Product the product meta data model.
     */
    public function getRaaCartItems()
    {
       return $this->_cart->getQuote()->getAllItems();
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
