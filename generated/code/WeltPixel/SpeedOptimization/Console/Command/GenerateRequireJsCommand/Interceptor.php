<?php
namespace WeltPixel\SpeedOptimization\Console\Command\GenerateRequireJsCommand;

/**
 * Interceptor class for @see \WeltPixel\SpeedOptimization\Console\Command\GenerateRequireJsCommand
 */
class Interceptor extends \WeltPixel\SpeedOptimization\Console\Command\GenerateRequireJsCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\Backend\Helper\Utility $utilityHelper, \WeltPixel\SpeedOptimization\Helper\Bundling $bundlingHelper)
    {
        $this->___init();
        parent::__construct($utilityHelper, $bundlingHelper);
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
