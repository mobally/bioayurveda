<?php
namespace WeltPixel\Command\Console\Command\ExportModulesCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\ExportModulesCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\ExportModulesCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\File\Csv $csvFile, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Framework\Module\Dir\Reader $moduleDirReader, \Magento\Framework\Xml\Parser $xmlParser)
    {
        $this->___init();
        parent::__construct($storeManager, $csvFile, $objectManager, $scopeConfig, $moduleList, $moduleDirReader, $xmlParser);
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
