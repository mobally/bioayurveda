<?php
namespace Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha;

/**
 * Interceptor class for @see \Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha
 */
class Interceptor extends \Magento\Captcha\Block\Adminhtml\Captcha\DefaultCaptcha implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Captcha\Helper\Data $captchaData, \Magento\Backend\Model\UrlInterface $url, \Magento\Backend\App\ConfigInterface $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $captchaData, $url, $config, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}
