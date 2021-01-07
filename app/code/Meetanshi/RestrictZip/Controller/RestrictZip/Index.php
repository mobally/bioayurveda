<?php

namespace Meetanshi\RestrictZip\Controller\RestrictZip;

use Meetanshi\RestrictZip\Helper\Data;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Meetanshi\RestrictZip\Model\RestrictZipFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class Index extends Action
{
    /**
     * @var Data
     */
    private $helper;
    /**
     * @var
     */
    protected $messageManager;
    /**
     * @var RestrictZipFactory
     */
    protected $restrictZipFactory;
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var JsonFactory
     */
    protected $resultJsonFactory;

    /**
     * Index constructor.
     * @param Data $helper
     * @param StoreManagerInterface $storeManager
     * @param Context $context
     * @param RestrictZipFactory $restrictZipFactory
     * @param JsonFactory $resultJsonFactory
     */
    public function __construct(
        Data $helper,
        StoreManagerInterface $storeManager,
        Context $context,
        RestrictZipFactory $restrictZipFactory,
        JsonFactory $resultJsonFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->storeManager = $storeManager;
        $this->helper = $helper;
        $this->restrictZipFactory = $restrictZipFactory;
        return parent::__construct($context);
    }

    /**
     * @return $this|\Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\Result\Json|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        if (!$this->helper->getEnabled()) {
            return $this;
        }
        $zipCode = $this->getRequest()->getParam('zipCode');
        $resultJson = $this->resultJsonFactory->create();
        $collection = $this->restrictZipFactory->create()->getCollection()
            ->addFieldToFilter('zip_code', $zipCode)
            ->addFieldToFilter('store_id', array($this->getStoreId(),0))
            ->load();
        if ($collection->getData()) {
            $estimateTime = '';
            foreach ($collection->getData() as $data) {
                if ($this->helper->getShowEstimatedTime()) {
                    $estimateTime = $data['estimate_delivery_time'];
                }
            }
            $resultJson->setData([
                'status' => "ok",
                'message' => $this->helper->getAvailabilityMsg(),
                'estimentedtime' => $estimateTime
            ]);
        } else {
            $resultJson->setData([
                'status' => "error",
                'message' => $this->helper->getUnavailabilityMsg()
            ]);
        }
        return $resultJson;
    }

    /**
     * @return int
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getStoreId()
    {
        return $this->storeManager->getStore()->getId();
    }
}
