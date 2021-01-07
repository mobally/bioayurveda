<?php

namespace Meetanshi\RestrictZip\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class InstallSchema
 * @package Meetanshi\RestrictZip\Setup
 */
class InstallSchema implements InstallSchemaInterface
{

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        try {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('meetanshi_restrict_zip_code')
            )->addColumn(
                'zip_code_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Zip Code Id'
            )->addColumn(
                'zip_code',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false, 'default' => ''],
                'Zip Code'
            )->addColumn(
                'estimate_delivery_time',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false, 'default' => ''],
                'Estimate Delivery Time'
            )->addColumn(
                'store_id',
                Table::TYPE_INTEGER,
                255,
                ['nullable' => false],
                'Store Id'
            )->setComment(
                'Restrict Zip Code'
            );
        } catch (\Zend_Db_Exception $e) {
            throw new \Magento\Framework\Exception\LocalizedException(__('%1', $e->getMessage()));
        }

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
