<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */

namespace Amasty\Xlanding\Controller\Adminhtml\Page;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;
use Amasty\Xlanding\Model\ResourceModel\Page\CollectionFactory;

class MassEnable extends \Magento\Backend\App\Action
{
    protected $filter;

    protected $collectionFactory;

    public function __construct(
        Context $context,
        CollectionFactory $collectionFactory,
        Filter $filter
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());

        foreach ($collection as $item) {
            $item->setIsActive(true);
            $item->save();
        }

        $this->messageManager->addSuccess(__('A total of %1 record(s) have been enabled.', $collection->getSize()));

        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}
