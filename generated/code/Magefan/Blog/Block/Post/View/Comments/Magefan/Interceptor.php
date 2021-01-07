<?php
namespace Magefan\Blog\Block\Post\View\Comments\Magefan;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Post\View\Comments\Magefan
 */
class Interceptor extends \Magefan\Blog\Block\Post\View\Comments\Magefan implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Url $customerUrl, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $localeResolver, $customerSession, $customerUrl, $data);
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
