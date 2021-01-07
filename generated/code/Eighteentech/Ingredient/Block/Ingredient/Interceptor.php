<?php
namespace Eighteentech\Ingredient\Block\Ingredient;

/**
 * Interceptor class for @see \Eighteentech\Ingredient\Block\Ingredient
 */
class Interceptor extends \Eighteentech\Ingredient\Block\Ingredient implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Eighteentech\Ingredient\Model\IngredientFactory $ingredientFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Filesystem\DirectoryList $directory_list, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ingredientFactory, $productFactory, $storeManager, $directory_list, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
