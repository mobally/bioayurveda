<?php
namespace Eighteentech\CategoryContent\Model\Category;
  
class DataProvider extends \Magento\Catalog\Model\Category\DataProvider
{
  
    protected function getFieldsMap()
    {
        $fields = parent::getFieldsMap();
        $fields['content'][] = 'category_banner_image'; // category banner image field
       
        return $fields;
    }
}
