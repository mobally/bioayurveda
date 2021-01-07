<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */


declare(strict_types=1);

namespace Amasty\Xlanding\Model\Indexer\Mview;

use Amasty\Xlanding\Model\Indexer\ProductPageProcessor;
use Magento\Framework\Mview\ActionInterface;

class ProductPageAction implements ActionInterface
{
    /**
     * @var ProductPageProcessor
     */
    private $productPageProcessor;

    public function __construct(ProductPageProcessor $productPageProcessor)
    {
        $this->productPageProcessor = $productPageProcessor;
    }

    /**
     * @param int[] $ids
     * @return void
     */
    public function execute($ids)
    {
        $this->productPageProcessor->reindexList($ids, true);
    }
}
