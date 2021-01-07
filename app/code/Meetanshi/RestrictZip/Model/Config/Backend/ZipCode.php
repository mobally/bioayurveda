<?php

namespace Meetanshi\RestrictZip\Model\Config\Backend;

use Magento\Config\Model\Config\Backend\File;
use Magento\Framework\Filesystem;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Meetanshi\RestrictZip\Model\RestrictZipFactory;
use Magento\Framework\File\Csv;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Magento\Store\Model\StoreManagerInterface;
use Meetanshi\RestrictZip\Helper\Data;

/**
 * Class ZipCode
 * @package Meetanshi\RestrictZip\Model\Config\Backend
 */
class ZipCode extends File
{
    /**
     * @var Csv
     */
    protected $csv;
    /**
     * @var RestrictZipFactory
     */
    protected $importFactory;
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var Data
     */
    private $helper;

    /**
     * ZipCode constructor.
     * @param Context $context
     * @param Registry $registry
     * @param ScopeConfigInterface $config
     * @param TypeListInterface $cacheTypeList
     * @param UploaderFactory $uploaderFactory
     * @param File\RequestData\RequestDataInterface $requestData
     * @param Filesystem $filesystem
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param RestrictZipFactory $importFactory
     * @param Csv $csv
     * @param Data $helper
     * @param StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        UploaderFactory $uploaderFactory,
        File\RequestData\RequestDataInterface $requestData,
        Filesystem $filesystem,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        RestrictZipFactory $importFactory,
        Csv $csv,
        Data $helper,
        StoreManagerInterface $storeManager,
        array $data = []
    )
    {
        $this->csv = $csv;
        $this->importFactory = $importFactory;
        $this->storeManager = $storeManager;
        $this->helper = $helper;
        parent::__construct(
            $context,
            $registry,
            $config,
            $cacheTypeList,
            $uploaderFactory,
            $requestData,
            $filesystem,
            $resource,
            $resourceCollection,
            $data
        );
    }

    /**
     * @return array
     */
    public function getAllowedExtensions()
    {
        return ['csv'];
    }

    /**
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function beforeSave()
    {
        $file = $this->getFileData();
        if (!empty($file)) {
            try {

                if (!isset($file['name'])) {
                    throw new \Magento\Framework\Exception\LocalizedException(__('Invalid file upload attempt.'));
                } else {
                    if (!(strpos(strtolower($file['name']), '.csv') !== false)) {
                        throw new \Magento\Framework\Exception\LocalizedException(__('Invalid file type. Only CSV file type allowed.'));
                    }
                }
                $csvData = $this->csv->getData($file['tmp_name']);
                if ($this->checkRowHeading($csvData[0])) {
                    throw new \Magento\Framework\Exception\LocalizedException(__('Improper CSV file format.'));
                }
                if (sizeof($csvData) < 2) {
                    throw new \Magento\Framework\Exception\LocalizedException(__('CSV file is empty.'));
                }

                if($this->helper->getDeleteZip()){
                    $import = $this->importFactory->create()->getCollection();
                    foreach ($import->getData() as $items) {
                        $item = $this->importFactory->create()->load($items['zip_code_id']);
                        $item->delete();
                    }
                }
                foreach ($csvData as $row => $data) {
                    if ($row > 0) {
                        if (sizeof($data) == 3) {
                            if ($data[0] != '' && $data[1] != '' && $data[2]) {
                                $storeId = $this->getStoreId($data[2]);
                                $import = $this->importFactory->create()->getCollection()
                                    ->addFieldToFilter('zip_code', $data[0])
                                    ->addFieldToFilter('store_id', $storeId);
                                if ($import->count() > 0) {
                                    foreach ($import->getData() as $item) {
                                        $importUpdate = $this->importFactory->create()->load($item['zip_code_id']);
                                        $importUpdate->setData('zip_code', $data[0])
                                            ->setData('estimate_delivery_time', $data[1])
                                            ->setData('store_id', $storeId)
                                            ->save();
                                    }
                                } else {
                                    $importNew = $this->importFactory->create();
                                    $importNew->setData('zip_code', $data[0])
                                        ->setData('estimate_delivery_time', $data[1])
                                        ->setData('store_id', $storeId)
                                        ->save();
                                }
                            }
                        }
                    }

                }
            } catch (\Exception $e) {
                throw new \Magento\Framework\Exception\LocalizedException(__('%1', $e->getMessage()));
            }
        }
        $this->setValue('');
        return $this;
    }

    /**
     * @param $rowHeading
     * @return array
     */
    public function checkRowHeading($rowHeading)
    {
        $header = [
            0 => 'Zipcode',
            1 => 'Estimated Delivery Time',
            2 => 'Store Code'];
        $fieldNew = [];
        foreach ($header as $key => $value) {
            $fieldNew[$key] = $value;
        }
        $result = array_diff_assoc($rowHeading, $fieldNew);
        if (!empty($result)) {
            return $result;
        }
        $result = array_diff($fieldNew, $rowHeading);
        if (!empty($result)) {
            return $result;
        }
    }

    /**
     * @param $storeCode
     * @return int
     */
    public function getStoreId($storeCode)
    {
        $stores = $this->storeManager->getStores(true, true);
        if(isset($stores[$storeCode])){
            return $store_id = $stores[$storeCode]->getId();
        }
    }
}
