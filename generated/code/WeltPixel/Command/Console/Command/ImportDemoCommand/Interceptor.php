<?php
namespace WeltPixel\Command\Console\Command\ImportDemoCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\ImportDemoCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\ImportDemoCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\File\Csv $csvFile, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Component\ComponentRegistrarInterface $componentRegistrar, \Magento\Theme\Model\ResourceModel\Theme\CollectionFactory $themeFactory, \Magento\Framework\App\ProductMetadataInterface $productMetadata)
    {
        $this->___init();
        parent::__construct($csvFile, $resourceConfig, $storeManager, $componentRegistrar, $themeFactory, $productMetadata);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        if (!$pluginInfo) {
            return parent::run($input, $output);
        } else {
            return $this->___callPlugins('run', func_get_args(), $pluginInfo);
        }
    }
}
