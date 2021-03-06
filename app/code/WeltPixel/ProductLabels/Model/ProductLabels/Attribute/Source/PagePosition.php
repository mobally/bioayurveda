<?php
namespace WeltPixel\ProductLabels\Model\ProductLabels\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\SourceInterface;
use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class PagePosition
 * @package WeltPixel\ProductLabels\Model\ProductLabels\Attribute\Source
 */
class PagePosition implements SourceInterface, OptionSourceInterface
{

    /**
     * Frequencies
     */
    const POSITION_IMAGE   = 1;
    const POSITION_AFTER_SHORT_DESCRIPTION = 2;


    /**
     * @return array
     */
    public function getAvailableStatuses()
    {
        return [
            self::POSITION_IMAGE     => __('On product image'),
            self::POSITION_AFTER_SHORT_DESCRIPTION     => __('After product short description')
        ];
    }

    /**
     * Retrieve All options
     *
     * @return array
     */
    public function getAllOptions() {
        $result = [];

        foreach ($this->getAvailableStatuses() as $index => $value) {
            $result[] = ['value' => $index, 'label' => $value];
        }

        return $result;
    }

    /**
     * Retrieve Option value text
     *
     * @param string $value
     * @return mixed
     */
    public function getOptionText($value) {
        $options = $this->getAvailableStatuses();

        return isset($options[$value]) ? $options[$value] : null;
    }

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray() {
        return $this->getAllOptions();
    }

}
