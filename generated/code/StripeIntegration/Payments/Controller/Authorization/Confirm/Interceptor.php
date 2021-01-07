<?php
namespace StripeIntegration\Payments\Controller\Authorization\Confirm;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Authorization\Confirm
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Authorization\Confirm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Multishipping $multishippingHelper)
    {
        $this->___init();
        parent::__construct($context, $helper, $multishippingHelper);
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
