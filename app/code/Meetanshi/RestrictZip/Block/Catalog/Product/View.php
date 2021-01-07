<?php

namespace Meetanshi\RestrictZip\Block\Catalog\Product;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\ObjectManagerInterface;
use Magento\Store\Model\StoreManagerInterface;
use Meetanshi\RestrictZip\Model\RestrictZipFactory;
use Magento\Framework\Registry;
use Meetanshi\RestrictZip\Helper\Data;

/**
 * Class View
 * @package Meetanshi\RestrictZip\Block\Catalog\Product
 */
class View extends Template
{
    /**
     * @var ObjectManagerInterface
     */
    public $objectManager;
    /**
     * @var RestrictZipFactory
     */
    protected $restrictZip;
    /**
     * @var Registry
     */
    protected $registry;
    /**
     * @var Data
     */
    protected $helper;
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * View constructor.
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     * @param RestrictZipFactory $restrictZip
     * @param Registry $registry
     * @param Data $helper
     * @param StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        RestrictZipFactory $restrictZip,
        Registry $registry,
        Data $helper,
        StoreManagerInterface $storeManager,
        array $data = []
    ) {
        $this->restrictZip = $restrictZip;
        $this->storeManager = $storeManager;
        $this->objectManager = $objectManager;
        $this->registry = $registry;
        $this->helper = $helper;

        parent::__construct($context, $data);
    }

    /**
     * @return $this
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->helper->getEnabled();
    }

    /**
     * @return mixed
     */
    public function getCurrentProduct()
    {
        return $this->registry->registry('current_product');
    }
}
