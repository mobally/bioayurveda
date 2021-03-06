<?php

namespace Eighteentech\Home\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
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
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        if (version_compare($context->getVersion(), '1.0.0') < 0){
	    $eavSetup -> removeAttribute(\Magento\Catalog\Model\Category::ENTITY, 'home_slider');	
			$eavSetup -> addAttribute(\Magento\Catalog\Model\Category :: ENTITY, 'home_slider', [
                        'type' => 'int',
                        'label' => 'Home Slider',
                        'input' => 'select',
						'required' => false,                        
                        'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                        'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,                   
                        'group' => 'General Information',
						'sort_order' => 3,
						'user_defined' => 0,						
			]
			);


		}

    }
}
