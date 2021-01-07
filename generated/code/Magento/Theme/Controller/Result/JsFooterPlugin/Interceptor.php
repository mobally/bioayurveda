<?php
namespace Magento\Theme\Controller\Result\JsFooterPlugin;

/**
 * Interceptor class for @see \Magento\Theme\Controller\Result\JsFooterPlugin
 */
class Interceptor extends \Magento\Theme\Controller\Result\JsFooterPlugin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSendResponse(\Magento\Framework\App\Response\Http $subject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSendResponse');
        if (!$pluginInfo) {
            return parent::beforeSendResponse($subject);
        } else {
            return $this->___callPlugins('beforeSendResponse', func_get_args(), $pluginInfo);
        }
    }
}
