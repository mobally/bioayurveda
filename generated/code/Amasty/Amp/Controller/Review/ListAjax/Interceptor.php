<?php
namespace Amasty\Amp\Controller\Review\ListAjax;

/**
 * Interceptor class for @see \Amasty\Amp\Controller\Review\ListAjax
 */
class Interceptor extends \Amasty\Amp\Controller\Review\ListAjax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Amasty\Amp\Controller\Review\ReviewsGetter $reviewsGetter)
    {
        $this->___init();
        parent::__construct($context, $reviewsGetter);
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
