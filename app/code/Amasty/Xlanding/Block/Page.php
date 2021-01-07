<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */


declare(strict_types=1);

namespace Amasty\Xlanding\Block;

use Amasty\Xlanding\Model\Page as PageModel;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\View\Element\Template;

class Page extends Template implements IdentityInterface
{
    protected $_coreRegistry;
    protected $_templateFilterFactory;
    protected $_templateFilterModel = \Magento\Catalog\Model\Template\Filter::class;
    protected $_pageTemplateProcessor;
    protected $_filterProvider;

    /**
     * @var PageModel
     */
    private $pageModel;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Catalog\Model\Template\Filter\Factory $templateFilterFactory,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        PageModel $pageModel,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        $this->_templateFilterFactory = $templateFilterFactory;
        $this->_filterProvider = $filterProvider;
        $this->pageModel = $pageModel;

        return parent::__construct(
            $context,
            $data
        );
    }

    /**
     * @return PageModel
     */
    public function getPage()
    {
        return $this->_coreRegistry->registry('amasty_xlanding_page');
    }

    public function getLayoutFileUrl(): string
    {
        return $this->pageModel->getLayoutFileUrl();
    }

    public function getPageTemplateProcessor()
    {
        if (!$this->_pageTemplateProcessor) {
            $this->_pageTemplateProcessor = $this->_templateFilterFactory->create($this->_templateFilterModel);
        }
        return $this->_pageTemplateProcessor;
    }

    public function filter($value)
    {
        return $this->getPageTemplateProcessor()->filter($value);
    }

    public function getCmsBlockHtml($blockId)
    {
        return $this->getLayout()->createBlock(
            \Magento\Cms\Block\Block::class
        )->setBlockId(
            $blockId
        )->toHtml();
    }

    public function getLayoutTopDescription()
    {
        $html = $this->_filterProvider->getPageFilter()->filter($this->getPage()->getLayoutTopDescription());
        return $html;
    }

    public function getLayoutBottomDescription()
    {
        $html = $this->_filterProvider->getPageFilter()->filter($this->getPage()->getLayoutBottomDescription());
        return $html;
    }

    /**
     * @return array
     */
    public function getIdentities()
    {
        return [PageModel::CACHE_TAG . '_' . $this->getPage()->getId()];
    }
}
