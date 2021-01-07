<?php


namespace Retail\Analytics\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


/**
 * Element block used for outputting a recommendation placeholders on the stores pages.
 * This placeholder is then populated with recommendations from Nosto on the
 * client side.
 */
class Element extends Template
{
   
    /**
     * Constructor.
     *
     * @param Context $context the context.
     * @param array $data optional data.
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);

    }

    /**
     * Returns the Raa recommendation placeholder ID.
     *
     * This ID needs to match an existing recommendation element in Raa.
     *
     * @return string the ID.
     */
    public function getElementId()
    {
        return $this->getData('div_id');
    }
}
