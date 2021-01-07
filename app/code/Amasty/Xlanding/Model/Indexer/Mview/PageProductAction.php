<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */


declare(strict_types=1);

namespace Amasty\Xlanding\Model\Indexer\Mview;

use Amasty\Xlanding\Model\Indexer\PageProductProcessor;
use Magento\Framework\Mview\ActionInterface;

class PageProductAction implements ActionInterface
{
    /**
     * @var PageProductProcessor
     */
    private $pageProductProcessor;

    public function __construct(PageProductProcessor $pageProductProcessor)
    {
        $this->pageProductProcessor = $pageProductProcessor;
    }

    /**
     * @param int[] $ids
     * @return void
     */
    public function execute($ids)
    {
        $this->pageProductProcessor->reindexList($ids, true);
    }
}
