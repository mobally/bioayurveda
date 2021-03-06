<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Amp
 */


namespace Amasty\Amp\Block\Category\Navigation\Filter;

class Button extends \Magento\Framework\View\Element\Template
{
    /**
     * @var string
     */
    protected $_template = 'Amasty_Amp::category/product/list/button.phtml';

    /**
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function isFilterSelected()
    {
        $state = $this->getLayout()->getBlock('catalog.navigation.state');

        return $state ? !empty($state->getActiveFilters()) : false;
    }
}
