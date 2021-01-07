<?php
namespace WeltPixel\SocialLogin\Controller\Ajax\Twitteroauth;

/**
 * Interceptor class for @see \WeltPixel\SocialLogin\Controller\Ajax\Twitteroauth
 */
class Interceptor extends \WeltPixel\SocialLogin\Controller\Ajax\Twitteroauth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \WeltPixel\SocialLogin\Model\Twitter $twitterModel)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $twitterModel);
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
