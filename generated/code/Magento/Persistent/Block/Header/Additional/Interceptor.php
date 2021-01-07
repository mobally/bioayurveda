<?php
namespace Magento\Persistent\Block\Header\Additional;

/**
 * Interceptor class for @see \Magento\Persistent\Block\Header\Additional
 */
class Interceptor extends \Magento\Persistent\Block\Header\Additional implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\View $customerViewHelper, \Magento\Persistent\Helper\Session $persistentSessionHelper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $jsonSerializer = null, ?\Magento\Persistent\Helper\Data $persistentHelper = null)
    {
        $this->___init();
        parent::__construct($context, $customerViewHelper, $persistentSessionHelper, $customerRepository, $data, $jsonSerializer, $persistentHelper);
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
