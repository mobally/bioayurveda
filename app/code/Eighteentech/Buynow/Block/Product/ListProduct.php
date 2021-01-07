<?php

namespace Eighteentech\Buynow\Block\Product;

class ListProduct extends \Magento\Catalog\Block\Product\ProductList\Item\Block
{
    /**
     * @var \Magento\Framework\Url\Helper\Data
     */
    protected $urlHelper;
    protected  $productConfigurable;

    /**
     * ListProduct constructor.
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Framework\Url\Helper\Data $urlHelper
     * @param array $data
     */
    public function __construct(
        \Magento\ConfigurableProduct\Model\Product\Type\Configurable $productConfigurable,
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Url\Helper\Data $urlHelper,
        array $data = []
    ) {
        $this->urlHelper = $urlHelper;
        $this->productConfigurable = $productConfigurable;
        parent::__construct($context, $data);
    }

    /**
     * Get post parameters
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return string
     */
    public function getAddToCartPostParams(\Magento\Catalog\Model\Product $product)
    {
        $url = $this->getAddToCartUrl($product);
        return [
            'action' => $url,
            'data' => [
                'product' => $product->getEntityId(),
                \Magento\Framework\App\ActionInterface::PARAM_NAME_URL_ENCODED => $this->urlHelper->getEncodedUrl($url),
            ]
        ];
    }
    
    
    public function getConfigAttributes(\Magento\Catalog\Model\Product $product){
			$productAttributeOptions = $this->productConfigurable->getConfigurableAttributesAsArray($product);
			$attributeIds = array();
			foreach ($productAttributeOptions as $key => $value) {	
				if(isset($value['attribute_id']) && $value['attribute_id']!=''){
					$attributeIds[] = $value['attribute_id'];
				}			
			}
			
			return $attributeIds;
		}
}

