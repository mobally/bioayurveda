<?php

namespace Meetanshi\RestrictZip\Block\Adminhtml\System\Config\Form\Field;

use Magento\Framework\View\Element\AbstractBlock;
use Magento\Config\Model\Config\CommentInterface;

/**
 * Class Link
 * @package Meetanshi\RestrictZip\Block\Adminhtml\System\Config\Form\Field
 */
class Link extends AbstractBlock implements CommentInterface
{
    /**
     * @param string $elementValue
     * @return string
     */
    public function getCommentText($elementValue)
    {
        $csvFile = $this->_assetRepo->getUrl('Meetanshi_RestrictZip::csv/sample_import.csv');
        return "<a href='$csvFile'>Download Sample CSV</a> ";
    }
}
