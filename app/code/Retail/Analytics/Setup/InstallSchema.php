<?php

namespace Retail\Analytics\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema extends Core implements InstallSchemaInterface
{
    /**
     * Installs DB schema for retailanalytics module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install( // @codingStandardsIgnoreLine
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();
        $this->createRaaConfigTable($setup);
        $setup->endSetup();
    }
}
