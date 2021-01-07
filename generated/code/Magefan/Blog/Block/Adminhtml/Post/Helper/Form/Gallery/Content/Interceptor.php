<?php
namespace Magefan\Blog\Block\Adminhtml\Post\Helper\Form\Gallery\Content;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Adminhtml\Post\Helper\Form\Gallery\Content
 */
class Interceptor extends \Magefan\Blog\Block\Adminhtml\Post\Helper\Form\Gallery\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = [], $imageUploadConfigDataProvider = null)
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data, $imageUploadConfigDataProvider);
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
