<?php

namespace Meetanshi\RestrictZip\Controller\Adminhtml\RestrictZip;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Response\Http\FileFactory;
use Magento\Backend\App\Action;
use Magento\Framework\File\Csv;
use Magento\Framework\App\Filesystem\DirectoryList;
use Meetanshi\RestrictZip\Model\RestrictZipFactory;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Index
 * @package Meetanshi\RestrictZip\Controller\Adminhtml\RestrictZip
 */
class Index extends Action
{
    /**
     * @var FileFactory
     */
    protected $fileFactory;
    /**
     * @var Csv
     */
    protected $csvProcessor;
    /**
     * @var DirectoryList
     */
    protected $directoryList;
    /**
     * @var RestrictZipFactory
     */
    protected $restrictZipFactory;
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * Index constructor.
     * @param Context $context
     * @param FileFactory $fileFactory
     * @param Csv $csvProcessor
     * @param DirectoryList $directoryList
     * @param RestrictZipFactory $restrictZipFactory
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        FileFactory $fileFactory,
        Csv $csvProcessor,
        DirectoryList $directoryList,
        RestrictZipFactory $restrictZipFactory,
        StoreManagerInterface $storeManager
    )
    {
        $this->restrictZipFactory = $restrictZipFactory;
        $this->fileFactory = $fileFactory;
        $this->csvProcessor = $csvProcessor;
        $this->directoryList = $directoryList;
        $this->storeManager = $storeManager;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \Exception
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function execute()
    {
        $fileName = 'RestrictZipCode.csv';
        $filePath = $this->directoryList->getPath(\Magento\Framework\App\Filesystem\DirectoryList::VAR_DIR)
            . "/" . $fileName;
        $zipData = $this->getZipCode();

        $this->csvProcessor
            ->saveData(
                $filePath,
                $zipData
            );

        return $this->fileFactory->create(
            $fileName,
            [
                'type' => "filename",
                'value' => $fileName
            ],
            \Magento\Framework\App\Filesystem\DirectoryList::VAR_DIR,
            'application/octet-stream'
        );
    }

    /**
     * @return array
     */
    public function getZipCode()
    {
        $result = [];
        $result [] = [
            'Zipcode',
            'Estimated Delivery Time',
            'Store Code'];
        $exportData = $this->restrictZipFactory->create()->getCollection();

        foreach ($exportData->getData() as $items) {
            $result [] = [$items['zip_code'],
                $items['estimate_delivery_time'],
                $this->getStoreCode($items['store_id'])];
        }
        return $result;
    }

    /**
     * @param $storeId
     * @return string
     */
    public function getStoreCode($storeId)
    {
        $stores = $this->storeManager->getStores();
        if (isset($stores[$storeId])) {
            return $storeCode = $stores[$storeId]->getCode();
        }
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Meetanshi_RestrictZip::configuration');
    }
}
