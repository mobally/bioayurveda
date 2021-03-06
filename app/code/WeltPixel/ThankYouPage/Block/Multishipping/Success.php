<?php

namespace WeltPixel\ThankYouPage\Block\Multishipping;

class Success extends \Magento\Multishipping\Block\Checkout\Success
{

    /**
     * @var \Magento\Sales\Model\Order\Address\Renderer
     */
    protected $renderer;

    /**
     * @var
     */
    protected $string;

    /**
     * @var \Magento\Catalog\Block\Product\ImageBuilder
     */
    protected $imageBuilder;

    protected $productRepository;

    protected $scopeConfig;

    /**
     * @var int
     */
    protected $currentIndex = 0;

    /**
     * @var array
     */
    protected $currentOrders = [];

    /**
     * @var  \Magento\Sales\Model\Order
     */
    protected $currentOrder;

    /**
     * @var \Magento\Sales\Model\OrderFactory
     */
    protected $orderFactory;

    /**
     * @var \Magento\Checkout\Model\Session $checkoutSession
     */
    protected $checkoutSession;

    /**
     * Success constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param \Magento\Sales\Model\Order\Address\Renderer $renderer
     * @param \Magento\Framework\Stdlib\StringUtils $string
     * @param \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Sales\Model\Order\Address\Renderer $renderer,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        array $data = []
    ) {
        $this->renderer = $renderer;
        $this->string = $string;
        $this->imageBuilder = $imageBuilder;
        $this->productRepository = $productRepository;
        $this->scopeConfig = $scopeConfig;
        $this->orderFactory = $orderFactory;
        $this->checkoutSession = $checkoutSession;

        parent::__construct(
            $context, $multishipping, $data
        );
    }

    /**
     * @return \Magento\Sales\Model\Order
     */
    public function getLastOrder() {
        return $this->_checkoutSession->getLastRealOrder();
    }

    /**
     * @param $address
     * @return null|string
     */
    public function getFormattedAddress($address) {
        return $this->renderer->format($address, 'html');
    }

    /**
     * @param $address
     * @param $fields
     * @return string
     */
    public function addressToString($address, $fields)
    {
        $string = '';
        foreach ($fields as $code) {
            $string .= $address->getData($code) . ', ';
        }

        return preg_replace('/\s+/', ' ', trim($string, ', '));
    }

    /**
     * @param $order
     * @return mixed
     */
    public function getPaymentMethodTitle($order) {
        $payment = $order->getPayment();
        $method = $payment->getMethodInstance();

        return $method->getTitle();
    }

    /**
     * @param $order
     * @return mixed
     */
    public function getShippingMethodTitle($order) {
        return $order->getShippingDescription();
    }

    /**
     * Prepare SKU
     * @param $sku
     * @return string
     */
    public function prepareSku($sku)
    {
        return $this->escapeHtml($this->string->splitInjection($sku));
    }

    /**
     * Return item unit price html
     * @param null $item
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getItemPriceHtml($item = null)
    {
        $block = $this->getLayout()->getBlock('item_unit_price');
        if (!$item) {
            $item = $this->getItem();
        }
        $block->setItem($item);
        return $block->toHtml();
    }

    /**
     * Return item row total html
     * @param null $item
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getItemRowTotalHtml($item = null)
    {
        $block = $this->getLayout()->getBlock('item_row_total');
        if (!$item) {
            $item = $this->getItem();
        }
        $block->setItem($item);
        return $block->toHtml();
    }

    /**
     * Retrieve product image
     * @param $item
     * @param $imageId
     * @param array $attributes
     * @return \Magento\Catalog\Block\Product\Image
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getImage($item, $imageId, $attributes = [])
    {
        $product = $this->getProductFromItem($item);
        if ($product->getSmallImage() && $product->getSmallImage() !== 'no_selection') {
            return $this->imageBuilder
                ->setProduct($product)
                ->setImageId($imageId)
                ->setAttributes($attributes)
                ->create();
        }

        return $this->imageBuilder
            ->setProduct($item->getProduct())
            ->setImageId($imageId)
            ->setAttributes($attributes)
            ->create();
    }

    /**
     * @return mixed
     */
    public function getDisplaySettings()
    {
        return $this->scopeConfig->getValue('tax/sales_display', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Return selected simple product if $_item has options
     *
     * @param $_item
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    private function getProductFromItem($_item)
    {
        $options = $_item->getProductOptions();
        if (isset($options['simple_sku'])) {
            return $this->productRepository->get($options['simple_sku']);
        }

        return $_item->getProduct();
    }

    /**
     * @return array
     */
    public function getOrders()
    {
        $orderIds = $this->getOrderIds();
        $currentOrders = [];
        if ($orderIds && !$currentOrders) {
            foreach ($orderIds as $orderId => $orderIncrement) {
                $currentOrders[] = $orderId;
            }
            $this->currentOrders = $currentOrders;
        }

        return $currentOrders;
    }

    /**
     * @param  int $order
     */
    public function setCurrentOrderId($order)
    {
        $this->checkoutSession->setCurrentMultiShippingOrder($order);
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentOrderId()
    {
        return $this->checkoutSession->getCurrentMultiShippingOrder();
    }

    /**
     * @return \Magento\Sales\Model\Order
     */
    public function getCurrentOrder()
    {
        $orderId = $this->getCurrentOrderId();
        return $this->orderFactory->create()->load($orderId);
    }

    /**
     * @return array
     */
    public function getGoogleMapShippingAddresses()
    {
        $shippingAddresses = [];
        foreach ($this->getOrders() as $orderId) {
            $_order = $this->orderFactory->create()->load($orderId);
            if ($_order->getShippingAddress()) {
                $shippingAddresses[] = $this->addressToString($_order->getShippingAddress(), ['street', 'city', 'region', 'country_id', 'postcode']);
            }
        }

        return $shippingAddresses;
    }
}