<?php

namespace MagePal\LinkProduct\Plugin\CatalogImportExport\Model\Import;

use Magento\CatalogImportExport\Model\Import\Product;
use MagePal\LinkProduct\Model\Product\Link;

/**
 * @see Product::getLinkNameToId
 */
class RelatedProduct
{
    /**
     * REMARK: needs core patch
     * https://github.com/magento/magento2/pull/21230/commits/0846e9aed7040659e7ce3e109eb91df3f5fdfb7e.patch
     *
     * @param Product $subject
     * @param $result
     * @return mixed
     */
    public function afterGetLinkNameToId(Product $subject, $result)
    {
        $result['_accessory_'] = Link::LINK_TYPE_ACCESSORY;
        return $result;
    }
    
}
