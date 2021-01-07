<?php
 
namespace Eighteentech\Ingredient\Model\Config\Source;
 
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
 
class Options extends AbstractSource
{
    protected $_ingredientCollectionFactory;
    public function __construct(\Eighteentech\Ingredient\Model\ResourceModel\Ingredient\CollectionFactory $ingredientCollectionFactory)
    {
         $this->_ingredientCollectionFactory = $ingredientCollectionFactory;
    }
    /**
    * @return option array
    */
    public function getAllOptions()
    {
       
       $optionArray = array();
       $ingredientCollection = $this->_ingredientCollectionFactory->create()->addFieldToFilter('is_active',array('eq'=>'1'));      
       if(is_object($ingredientCollection)){
            $i =0;
            foreach ($ingredientCollection as $ingredient) {
                 $optionArray[$i]['label']= $ingredient->getTitle();
                 $optionArray[$i]['value']= $ingredient->getId();
                 $i++;
             }
         }
 
      return $optionArray;
       
    }
    
 }   
?>
