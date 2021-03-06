<?php
/**
 * @category    WeltPixel
 * @package     WeltPixel_LayeredNavigation
 * @copyright   Copyright (c) 2018 Weltpixel
 * @author      Weltpixel TEAM
 */

namespace WeltPixel\LayeredNavigation\Model\Layer\Filter;

use Magento\CatalogSearch\Model\Layer\Filter\Price as AbstractFilter;
use WeltPixel\LayeredNavigation\Helper\Data as LayerHelper;

/**
 * Class Price
 * @package WeltPixel\LayeredNavigation\Model\Layer\Filter
 */
class Price extends AbstractFilter
{
    /** @var \WeltPixel\LayeredNavigation\Helper\Data */
    protected $_moduleHelper;

    /** @var array|null Filter value */
    protected $_filterVal = null;

    /** @var \Magento\Tax\Helper\Data */
    protected $_taxHelper;

    /** @var \Magento\Catalog\Model\Layer\Filter\DataProvider\Price */
    private $dataProvider;

    /** @var \Magento\Framework\Pricing\PriceCurrencyInterface */
    private $priceCurrency;

    /** @var \Magento\Framework\Registry */
    protected $_registry;

    protected $_scopeConfig;

    /**
     * Price constructor.
     * @param \Magento\Catalog\Model\Layer\Filter\ItemFactory $filterItemFactory
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Catalog\Model\Layer $layer
     * @param \Magento\Catalog\Model\Layer\Filter\Item\DataBuilder $itemDataBuilder
     * @param \Magento\Catalog\Model\ResourceModel\Layer\Filter\Price $resource
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Framework\Search\Dynamic\Algorithm $priceAlgorithm
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
     * @param \Magento\Catalog\Model\Layer\Filter\Dynamic\AlgorithmFactory $algorithmFactory
     * @param \Magento\Catalog\Model\Layer\Filter\DataProvider\PriceFactory $dataProviderFactory
     * @param \Magento\Tax\Helper\Data $taxHelper
     * @param LayerHelper $moduleHelper
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Catalog\Model\Layer\Filter\ItemFactory $filterItemFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\Layer $layer,
        \Magento\Catalog\Model\Layer\Filter\Item\DataBuilder $itemDataBuilder,
        \Magento\Catalog\Model\ResourceModel\Layer\Filter\Price $resource,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Framework\Search\Dynamic\Algorithm $priceAlgorithm,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        \Magento\Catalog\Model\Layer\Filter\Dynamic\AlgorithmFactory $algorithmFactory,
        \Magento\Catalog\Model\Layer\Filter\DataProvider\PriceFactory $dataProviderFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Tax\Helper\Data $taxHelper,
        LayerHelper $moduleHelper,
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        parent::__construct(
            $filterItemFactory,
            $storeManager,
            $layer,
            $itemDataBuilder,
            $resource,
            $customerSession,
            $priceAlgorithm,
            $priceCurrency,
            $algorithmFactory,
            $dataProviderFactory,
            $data
        );

        $this->priceCurrency = $priceCurrency;
        $this->dataProvider = $dataProviderFactory->create(['layer' => $this->getLayer()]);
        $this->_moduleHelper = $moduleHelper;
        $this->_taxHelper = $taxHelper;
        $this->_registry = $registry;
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @inheritdoc
     */
    public function apply(\Magento\Framework\App\RequestInterface $request)
    {
        $priceRangeCalculation = $this->_scopeConfig->getValue(
            \Magento\Catalog\Model\Layer\Filter\Dynamic\AlgorithmFactory::XML_PATH_RANGE_CALCULATION,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );

        if($priceRangeCalculation != 'auto') {
            return parent::apply($request);
        }


        $filterEntry = [];
        if (!$this->_moduleHelper->isEnabled()) {
            return parent::apply($request);
        }
        /**
         * Filter must be string: $fromPrice-$toPrice
         */
        $filter = $strFilter = $request->getParam($this->getRequestVar());
        if (!$filter || is_array($filter)) {
            return $this;
        }
        $collection = $this->getLayer()->getProductCollection();
        $baseCollection = clone $collection;

        $currentCatId = $this->_registry->registry('current_category') ? $this->_registry->registry('current_category')->getId() : false;
        $priceFilter = $this->_registry->registry('price_filter') ?: [];

        if ($currentCatId) {
            if (!array_key_exists($currentCatId, $priceFilter)) {
                $basePriceData = [
                    'min' => $baseCollection->getMinPrice(),
                    'max' => $baseCollection->getMaxPrice()
                ];
                $filterEntry = [
                    $currentCatId => $basePriceData
                ];
                $this->_registry->register('price_filter', $filterEntry);
            }
        }


        $filterParams = explode(',', $filter);
        $filter = $this->dataProvider->validateFilter($filterParams[0]);
        if (!$filter) {
            return $this;
        }

        $this->dataProvider->setInterval($filter);
        $priorFilters = $this->dataProvider->getPriorFilters($filterParams);
        if ($priorFilters) {
            $this->dataProvider->setPriorIntervals($priorFilters);
        }

        list($from, $to) = $this->_filterVal = $filter;

        $this->getLayer()->getProductCollection()->addFieldToFilter(
            'price',
            ['from' => $from, 'to' => $to]
        );

        $this->getLayer()->getState()->addFilter(
            $this->_createItem($this->_renderRangeLabel(empty($from) ? 0 : $from, $to), $filter)
        );


        return $this;
    }

    /**
     * @inheritdoc
     */
    protected function _renderRangeLabel($fromPrice, $toPrice)
    {
        if (!$this->_moduleHelper->isEnabled()) {
            return parent::_renderRangeLabel($fromPrice, $toPrice);
        }
        $formattedFromPrice = $this->priceCurrency->format($fromPrice);
        if ($toPrice === '') {
            return __('%1 and above', $formattedFromPrice);
        } elseif ($fromPrice == $toPrice && $this->dataProvider->getOnePriceIntervalValue()) {
            return $formattedFromPrice;
        } else {
            return __('%1 - %2', $formattedFromPrice, $this->priceCurrency->format($toPrice));
        }
    }

    /**
     * Get data array for building attribute filter items
     *
     * @return array
     *
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    protected function _getItemsData()
    {
        /*
        if (!$this->_moduleHelper->isEnabled()) {
            return parent::_getItemsData();
        }
*/
        $attribute = $this->getAttributeModel();
        $this->_requestVar = $attribute->getAttributeCode();

        /** @var \Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection $productCollection */
        $productCollection = $this->getLayer()->getProductCollection();

        if ($this->_filterVal) {
            /** @type \WeltPixel\LayeredNavigation\Model\ResourceModel\Fulltext\Collection $productCollectionClone */
            $productCollection = $productCollection->getCollectionClone()
                ->removeAttributeSearch(['price.from', 'price.to']);
        }

        $facets = $productCollection->getFacetedData($attribute->getAttributeCode());

        $data = [];
        if (count($facets) > 1) {
            foreach ($facets as $key => $aggregation) {
                $count = $aggregation['count'];
                if (strpos($key, '_') === false) {
                    continue;
                }
                $data[] = $this->prepareData($key, $count);
            }
        }

        return $data;
    }

    /**
     * @param string $key
     * @param int $count
     * @return array
     */
    private function prepareData($key, $count)
    {
        list($from, $to) = explode('_', $key);
        if ($from == '*') {
            $from = $this->getFrom($to);
        }
        if ($to == '*') {
            $to = $this->getTo($to);
        }
        $label = $this->_renderRangeLabel(
            empty($from) ? 0 : $from * $this->getCurrencyRate(),
            empty($to) ? $to : $to * $this->getCurrencyRate()
        );
        $value = $from . '-' . $to . $this->dataProvider->getAdditionalRequestData();

        $data = [
            'label' => $label,
            'value' => $value,
            'count' => $count,
            'from' => $from,
            'to' => $to,
        ];

        return $data;
    }
}


