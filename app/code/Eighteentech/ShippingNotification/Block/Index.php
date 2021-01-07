<?php
namespace Eighteentech\ShippingNotification\Block;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Store\Model\StoreManagerInterface;
use \Eighteentech\ShippingNotification\Helper\Data;
use \Magento\Cms\Api\BlockRepositoryInterface;
class Index extends Template
{   
	private $blockRepository;
    public function __construct(Context $context, StoreManagerInterface $storeManager, Data $helperData, BlockRepositoryInterface $blockRepository)
    {        
        $this->_storeManager = $storeManager;
        $this->_helperData = $helperData;
        $this->blockRepository = $blockRepository;
        parent::__construct($context);
    }
    public function getEnabled()
    {

        return $this->_helperData->getEnabled();
    }
    public function getNotificationBlock()
    {

        return $this->_helperData->getNotification();
    }
    public function getExpireTime(){
        return $this->_helperData->getExpireTime();
    }   
   
}
