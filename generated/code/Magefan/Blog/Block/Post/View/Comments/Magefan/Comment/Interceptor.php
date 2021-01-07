<?php
namespace Magefan\Blog\Block\Post\View\Comments\Magefan\Comment;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Post\View\Comments\Magefan\Comment
 */
class Interceptor extends \Magefan\Blog\Block\Post\View\Comments\Magefan\Comment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [], ?\Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone = null)
    {
        $this->___init();
        parent::__construct($context, $data, $timezone);
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
