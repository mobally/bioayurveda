<?php
namespace WeltPixel\Command\Console\Command\GenerateLessCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\GenerateLessCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\GenerateLessCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $generationContainer, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\App\State $state)
    {
        $this->___init();
        parent::__construct($generationContainer, $objectManager, $state);
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
