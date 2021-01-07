<?php
namespace Eighteentech\CategoryContent\Block\Index;
class Index extends \Magento\Framework\View\Element\Template
{
	protected $templateProcessor;
	protected $_registry;
	public function __construct(
	    \Magento\Framework\View\Element\Template\Context $context,	     
	     \Magento\Framework\Registry $registry
	)
	{
		parent::__construct($context);
		
		$this->_registry = $registry;
	}

  
    public function getMediaUrl()
  {
    $mediaUrl = $this->_storeManager
      ->getStore()
      ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    return $mediaUrl;
  }


  
  public function getCategoryBannerImage()
  {
  	$mediaUrl = $this->getMediaUrl();

     $CategoryBannerImage =  $this->CategoryContent()->getCategoryBannerImage();

     

    if(!empty($CategoryBannerImage)){
    
     $CategoryBannerImageUrl = $mediaUrl.'catalog/category/'.$CategoryBannerImage;

      return $CategoryBannerImageUrl;

      }else{

        return '';
      }

    
  }



    public function CategoryName(){

		return $this->CategoryContent()->getName();
		
	}

	
	public function CategoryContent(){
		
		return $this->_registry->registry('current_category');
	}
	
}
