<?php
namespace Eighteentech\Instagram\Block;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Store\Model\StoreManagerInterface;
use \Eighteentech\Instagram\Helper\Data;
class Index extends Template
{
    public function __construct(Context $context, StoreManagerInterface $storeManager, Data $helperData)
    {        
        $this->_storeManager = $storeManager;
        $this->_helperData = $helperData;
        parent::__construct($context);
    }
    public function getEnabled()
    {

        return $this->_helperData->getEnabled();
    }
    public function getUserId()
    {

        return $this->_helperData->getUserId();
    }
    public function getClientId()
    {

        return $this->_helperData->getClientId();
    }
    public function getAccessToken()
    {

        return $this->_helperData->getAccessToken();
    }
    
    public function getFollowBlock()
    {

        return $this->_helperData->getFollowBlock();
    }
}
