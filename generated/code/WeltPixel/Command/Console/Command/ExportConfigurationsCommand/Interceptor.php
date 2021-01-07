<?php
namespace WeltPixel\Command\Console\Command\ExportConfigurationsCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\ExportConfigurationsCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\ExportConfigurationsCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $sectionContainer, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\File\Csv $csvFile, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($sectionContainer, $storeManager, $csvFile, $objectManager, $scopeConfig);
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
