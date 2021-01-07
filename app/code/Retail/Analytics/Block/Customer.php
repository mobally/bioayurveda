<?php
/**
 
 * @author Retailreco Pvt Ltd <info@Retailreco.com>
 * @copyright 2018 Retailreco Pvt Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 *
 */

namespace Retail\Analytics\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Helper\Session\CurrentCustomer;
use Magento\Framework\Stdlib\CookieManagerInterface;

/**
 * Customer block used for customer tagging.
 */
class Customer extends Template
{
  	private $currentCustomer;
    private $cookieManager;

    /**
     * Constructor
     *
     * @param Context $context
     * @param NostoHelperAccount $nostoHelperAccount
     * @param NostoHelperScope $nostoHelperScope
     * @param array $data
     */
    public function __construct( \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
            \Magento\Customer\Model\SessionFactory $customerSession, CurrentCustomer $currentCustomer,
        CookieManagerInterface $cookieManager,
        Context $context,
        array $data = []
    ) {
    	$this->customerRepository = $customerRepository;
    	$this->_customerSession = $customerSession;
        parent::__construct($context, $data);
    }
    
    public function getCurrentCustomer()
    {
    	$customer = $this->_customerSession->create();
    	return $customer;
    }

   
}
