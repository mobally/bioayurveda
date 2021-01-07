<?php

namespace Eighteentech\Home\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
 * @codeCoverageIgnore
 */
class UpgradeData implements UpgradeDataInterface
{
    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;
 
    /**
     * Init
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
 
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        if (version_compare($context->getVersion(), '1.0.3') < 0){
	    $eavSetup -> removeAttribute(\Magento\Catalog\Model\Category::ENTITY, 'category_tagline');	
			$eavSetup -> addAttribute(\Magento\Catalog\Model\Category :: ENTITY, 'category_tagline', [
                        'type' => 'varchar',
                        'label' => 'Category Tagline',
                        'input' => 'text',
						'required' => false,
                        'sort_order' => 110,
                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                        'visible' => true,                        
                        'is_html_allowed_on_front' => false,
                        'group' => 'General Information',						
						'note'  => 'Category Tagline'
			]
			);


		}
		
		if (version_compare($context->getVersion(), '1.0.4') < 0){
	    $eavSetup -> removeAttribute(\Magento\Catalog\Model\Category::ENTITY, 'show_footer');	
			$eavSetup -> addAttribute(\Magento\Catalog\Model\Category :: ENTITY, 'show_footer', [
                        'type' => 'varchar',
                        'label' => 'Show in Footer',
                        'input' => 'text',
						'required' => false,
                        'sort_order' => 110,
                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                        'visible' => true,                        
                        'is_html_allowed_on_front' => false,
                        'group' => 'General Information',						
						'note'  => 'Show in Footer'
			]
			);


		}
		

    }
}
