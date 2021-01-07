<?php
namespace Amasty\Xlanding\Controller\Adminhtml\Export\GridToCsv;

/**
 * Interceptor class for @see \Amasty\Xlanding\Controller\Adminhtml\Export\GridToCsv
 */
class Interceptor extends \Amasty\Xlanding\Controller\Adminhtml\Export\GridToCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\Xlanding\Model\Export\ConvertToCsv $converter, \Magento\Framework\App\Response\Http\FileFactory $fileFactory)
    {
        $this->___init();
        parent::__construct($context, $converter, $fileFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
