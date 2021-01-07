<?php
namespace Retail\Analytics\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Catalog\Model\Product;
use \Magento\Framework\App\Helper\Context;
class Price extends AbstractHelper
{
	private $product;
	public function __construct(
			Context $context,
			/** @noinspection PhpUndefinedClassInspection */
			product $product
			
	) {
		parent::__construct($context);
		$this->product = $product;
	}
    /**
     * Formats price into Nosto format, e.g. 1000.99.
     *
     * @param string|int|float $price
     *
     * @return string
     */
    public static function getFormattedPrice($price)
    {
        return number_format($price, 2, '.', '');
    }

    /**
     * Gets the unit price for a product model.
     *
     * @param Mage_Catalog_Model_Product $product
     *
     * @return float
     */
    public function getProductPrice($product)
    {
        return $this->_getProductPrice($product);
    }

    /**
     * Get the final price for a product model.
     *
     * @param Mage_Catalog_Model_Product $product
     *
     * @return float
     */
    public function getProductFinalPrice($product)
    {
        return $this->_getProductPrice($product, true);
    }

    /**
     * Get unit/final price for a product model.
     *
     * @param Mage_Catalog_Model_Product $product
     * @param bool                       $finalPrice
     *
     * @return float
     */
    protected function _getProductPrice($product, $finalPrice = false)
    {
        $price = 0;

        switch ($product->getTypeId()) {
            case Bundle::getType():
                // Get the bundle product "from" price.
                $price = $product->getPriceModel()->getTotalPrices($product, 'min', true);
                break;

            case Grouped::getType():
                // Get the grouped product "starting at" price.
                /** @var $tmpProduct Mage_Catalog_Model_Product */
                $tmpProduct = $this->product
                    ->getCollection()
                    ->addAttributeToFilter('entity_id', $product->getId())
                    ->setPage(1, 1)
                    ->addMinimalPrice()
                    ->addTaxPercents()
                    ->load()
                    ->getFirstItem();
                if ($tmpProduct) {
                    $price = $tmpProduct->getMinimalPrice();
                }
                break;

            default:
                if ($finalPrice) {
                    $price = $product->getFinalPrice();
                } else {
                    $price = $product->getPrice();
                }
                break;
        }

        return (float)$price;
    }    
 
   
}
