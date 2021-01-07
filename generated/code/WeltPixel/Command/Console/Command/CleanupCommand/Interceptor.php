<?php
namespace WeltPixel\Command\Console\Command\CleanupCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\CleanupCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\CleanupCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Deploy\Model\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($objectManager, $filesystem);
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
