<?php
namespace StripeIntegration\Payments\Controller\Ach\Verification;

/**
 * Interceptor class for @see \StripeIntegration\Payments\Controller\Ach\Verification
 */
class Interceptor extends \StripeIntegration\Payments\Controller\Ach\Verification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \StripeIntegration\Payments\Helper\Generic $helper, \StripeIntegration\Payments\Helper\Ach $achHelper)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $helper, $achHelper);
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
