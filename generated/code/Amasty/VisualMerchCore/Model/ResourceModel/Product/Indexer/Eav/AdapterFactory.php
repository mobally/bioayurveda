<?php
namespace Amasty\VisualMerchCore\Model\ResourceModel\Product\Indexer\Eav;

/**
 * Factory class for @see \Amasty\VisualMerchCore\Model\ResourceModel\Product\Indexer\Eav\Adapter
 */
class AdapterFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Amasty\\VisualMerchCore\\Model\\ResourceModel\\Product\\Indexer\\Eav\\Adapter')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Amasty\VisualMerchCore\Model\ResourceModel\Product\Indexer\Eav\Adapter
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
