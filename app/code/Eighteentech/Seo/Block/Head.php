<?php
namespace Eighteentech\Seo\Block;

class Head extends \Magento\Framework\View\Element\Template {
        protected $_storeManager;
        protected $_urlInterface;
        protected $_lang;
 
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,  
        \Magento\Framework\ObjectManagerInterface $objectmanager, 
         \Magento\Store\Model\StoreManagerInterface $storeManager,
         \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Cms\Model\Page $page,    
        array $data = []
    )
    {        
        $this->_objectManager = $objectmanager;
         $this->_storeManager = $storeManager;
          $this->_scopeConfig = $scopeConfig;
        $this->_page = $page;
       $this->_storeId =(int)$this->_storeManager->getStore()->getId();
        parent::__construct($context, $data);   
        
       
    }
     public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getFullActionName(){

return $this->_objectManager->get('Magento\Framework\App\Action\Context')->getRequest()->getFullActionName();

    }


   public function getCmsPagetitle(){

   if($this->_page->getMetaTitle()){ 

      return $this->_page->getMetaTitle();

     }
    elseif($this->_page->getTitle() != '') {

      return $this->_page->getTitle();

     }else{

      return $this->_scopeConfig->getValue('design/head/default_title', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
     }
  

   }


   public function getCmsPageDescription(){


     if($this->_page->getMetaDescription()){ 

      return $this->_page->getMetaDescription();

     }else{
      return $this->_scopeConfig->getValue('design/head/default_description', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
     }
  

   }

  public function getDefaultMetaDescription(){

      return $this->_scopeConfig->getValue('design/head/default_description', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

   }





  public function getObjectmanager(){

    return $this->_objectManager; 
 }

   
}
