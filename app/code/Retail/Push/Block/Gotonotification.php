<?php


namespace Retail\Push\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Retail\Analytics\Helper\ConfigData;
use Magento\Directory\Model\Currency;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Data\Form\FormKey;


/**
 * Element block used for outputting a recommendation placeholders on the stores pages.
 * This placeholder is then populated with recommendations from Nosto on the
 * client side.
 */
class Gotonotification extends Template
{
   
    /**
     * Constructor.
     *
     * @param Context $context the context.
     * @param array $data optional data.
     */
	protected $_raaHelper;
	private $currentCustomer;
    public function __construct(
        Context $context,
    	ConfigData $raaHelper,
    	StoreManagerInterface $storeManager,
    	\Magento\Customer\Model\SessionFactory $customerSession,
        array $data = []
    ) {
    	$this->_raaHelper = $raaHelper;
    	$this->_storeManager = $storeManager;
    	$this->_customerSession = $customerSession;
        parent::__construct($context, $data);

    }

    /**
     * Returns the Raa recommendation placeholder ID.
     *
     * This ID needs to match an existing recommendation element in Raa.
     *
     * @return string the ID.
     */
    
    public function getEnabled()
    {
    	return $this->_raaHelper->getEnabled();
    }
    
    public function getEnablePush()
    {
    	return $this->_raaHelper->getEnablePush();
    }
    
    public function getServer()
    {
    	return $this->_raaHelper->getServer();
    }
    
    public function getAccount()
    {
    	return $this->_raaHelper->getAccount();
    }
    
    public function getResourcedir()
    {
    	return $this->_raaHelper->getResourcedir();
    }
    
    public function getResourceServer()
    {
    	return $this->_raaHelper->getResourceServer();
    }
    
    public function getPrediction()
    {
    	return $this->_raaHelper->getPrediction();
    }
    
    public function getClientIP()
    {
    	return $this->_raaHelper->getClientIP();
    }
    
    public function getResourceJs()
    {
    	return $this->_raaHelper->getRaaConfig('resourcejs');
    }
    
    public function getConfigIsOnline()
    {
        return $this->_raaHelper->getRaaConfig('isonline');
    }
    
    public function getConfigIsOrderTracking()
    {
    	return $this->_raaHelper->getRaaConfig('isgaordertracking');
    }
    
    public function getConfigIsRetargeting()
    {
    	return $this->_raaHelper->getRaaConfig('isretargeting');
    }
    
    public function getConfigIsGUI()
    {
    	return $this->_raaHelper->getRaaConfig('isgui');
    }
    
    public function getConfigIsLoadIFrame()
    {
    	return $this->_raaHelper->getRaaConfig('isloadiframe');
    }
    
    public function getIsSynchronousReco()
    {
    	return $this->_raaHelper->getIsSynchronousReco();
    }
    
    public function getDevelopmentmodeEmail()
    {
    	return $this->_raaHelper->getDevelopmentmodeEmail();
    }
    
 	public function getFormKey()
    {
    	return $this->_formKey->getFormKey();
    }
    
    
    
    public function getCurrencyRates()
    {
    	$currencies = $this->_currency->getConfigAllowCurrencies();
    	$defaultCurrencies = $this->_currency->getConfigBaseCurrencies();
    	$rates = $this->_currency->getCurrencyRates($defaultCurrencies, $currencies);
    	return $rates;
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
    
    public function getCurrentStoreId()
    {
    	return $this->_storeManager->getStore()->getId();
    }
    
    public function getBaseUrl()
    {
    	return $this->_storeManager->getStore()->getBaseUrl();
    }
    
    public function getCurrentCustomer()
    {
    	$customer = $this->_customerSession->create();
    	return $customer;
    }
}
