<?php
/**

 *
 */

namespace Retail\Analytics\Block;

use Magento\Checkout\Block\Success;
use Magento\Checkout\Model\Session;
use Magento\Framework\View\Element\Template\Context;
use Magento\Sales\Model\OrderFactory;
use Magento\Catalog\Model\Product;
use Retail\Analytics\Helper\Price;

/**
 * Category block used for outputting meta-data on the stores category pages.
 * This meta-data is sent to Nosto via JavaScript when users are browsing the
 * pages in the store.
 */
class Order extends Success
{
    
    private $checkoutSession;
	private $order;
	private $product;
    /** @noinspection PhpUndefinedClassInspection */
    /**
     * Constructor.
     *
     * @param Context $context
     * @param OrderFactory $orderFactory
     * @param Session $checkoutSession
     * @param array $data
     */
    public function __construct(
        Context $context,
        /** @noinspection PhpUndefinedClassInspection */
        \Magento\Sales\Model\Order $order,
    	OrderFactory $orderFactory,
        Session $checkoutSession,
    	product $product,
        array $data = []
    ) {
        parent::__construct($context, $orderFactory, $data);
        $this->checkoutSession = $checkoutSession;
        $this->order = $order;
        $this->product = $product;
    }

    /**
     * Returns the Raa order meta-data model.
     *
     * @return the order meta data model.
     */
    public function getLastOrder()
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $this->checkoutSession->getLastRealOrder();
        //print_r($order->getId());die;
        return $this->order->load($order->getId());
    }
    
    /**
     * Returns an array of generic data objects for all ordered items.
     * The list includes possible discount and shipping cost as separate items.
     *
     * Structure:
     * array({
     *     productId: 1,
     *     quantity: 1,
     *     name: foo,
     *     price: 2.00
     * }, {...});
     *
     * @param Mage_Sales_Model_Order $order
     *
     * @return object[]
     */
    public function getOrderItems($order)
    {
    	$items = array();
    	/** @var $visibleItems Mage_Sales_Model_Order_Item[] */
    	$visibleItems = $order->getAllVisibleItems();
    	foreach ($visibleItems as $visibleItem) {
    		$product = $this->product->load($visibleItem->getProductId());
    		if ($product->getTypeId() === \Magento\Bundle\Model\Product\Type::TYPE_CODE) {
    			if ((int)$product->getPriceType() === \Magento\Bundle\Model\Product\Type::TYPE_CODE) {
    				continue;
    			}
    			$children = $visibleItem->getChildrenItems();
    			foreach ($children as $child) {
    				$items[] = $this->_orderModelToItem($child);
    			}
    		} else {
    			$items[] = $this->_orderModelToItem($visibleItem);
    		}
    	}
    	return $items;
    }
    
    /**
     * Converts a order item model into a generic data object.
     * @param Mage_Sales_Model_Order_Item $model
     *
     * @return object
     */
    protected function _orderModelToItem($model)
    {
    	return (object)array(
    			'productId' => $model->getProductId(),
    			'quantity'  => (int)$model->getQtyOrdered(),
    			'name'      => $model->getName(),
    			'sku'      => $model->getSku(),
    			'price' => $model->getPriceInclTax(),
    			'discount' =>  $model->getDiscountAmount(),
    			'producttypeid' =>	$model->getProductType()
    	);
    }
    
    public function getFormattedPrice($price)
    {
    	return Price::getFormattedPrice($price);
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
