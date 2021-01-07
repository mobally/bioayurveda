<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Xlanding
 */


namespace Amasty\Xlanding\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Amasty\Xlanding\Setup\Operation\ChangeIndex;
use Amasty\Xlanding\Setup\Operation\ChangeIndexRevert;
use Amasty\Xlanding\Setup\Operation\AddEavAdditionalIndexTables;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @var \Magento\Store\Model\System\Store
     */
    private $storeManager;

    /**
     * @var \Amasty\Base\Model\Serializer
     */
    private $serializer;

    /**
     * @var ChangeIndex
     */
    private $changeIndex;

    /**
     * @var ChangeIndexRevert
     */
    private $changeIndexRevert;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Amasty\Base\Model\Serializer $serializer,
        ChangeIndex $changeIndex,
        ChangeIndexRevert $changeIndexRevert
    ) {
        $this->storeManager = $storeManager;
        $this->serializer = $serializer;
        $this->changeIndex = $changeIndex;
        $this->changeIndexRevert = $changeIndexRevert;
    }

    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.5', '<')) {
            $this->removeUrlKeyUniqueness($setup);
        }

        if (version_compare($context->getVersion(), '1.2.8', '<')) {
            $this->addIndexFields($setup);
        }

        if (version_compare($context->getVersion(), '1.3.0', '<')) {
            $this->changeMetaData($setup);
        }

        if (version_compare($context->getVersion(), '1.5.0', '<')) {
            $this->addIndexTables($setup);
            $this->addSortOrderColumn($setup);
        }

        if (version_compare($context->getVersion(), '1.6.1', '<')) {
            $this->changeIndex->execute($setup);
        }

        if (version_compare($context->getVersion(), '1.7.1', '<')) {
            $this->changeIndexRevert->execute($setup);
        }

        $setup->endSetup();
    }

    /**
     * @param SchemaSetupInterface $setup
     */
    protected function removeUrlKeyUniqueness(SchemaSetupInterface $setup)
    {
        $installer = $setup;
        $connection = $installer->getConnection();
        $connection->dropIndex(
            $setup->getTable('amasty_xlanding_page'),
            $installer->getIdxName(
                $installer->getTable('amasty_xlanding_page'),
                ['identifier'],
                AdapterInterface::INDEX_TYPE_UNIQUE
            )
        );
    }

    /**
     * @param SchemaSetupInterface $setup
     * @throws \Zend_Db_Exception
     */
    public function addIndexTables(SchemaSetupInterface $setup)
    {
        /**
         * Create table 'catalog_category_product'
         */
        $table = $setup->getConnection()
            ->newTable($setup->getTable('amasty_xlanding_page_product'))
            ->addColumn(
                'page_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Page ID'
            )
            ->addColumn(
                'product_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Product ID'
            )
            ->addColumn(
                'store_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Store ID'
            )
            ->addColumn(
                'position',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['nullable' => false, 'default' => '0'],
                'Position'
            )
            ->addIndex(
                $setup->getIdxName('amasty_xlanding_page_product', ['product_id']),
                ['product_id']
            )
            ->addIndex(
                $setup->getIdxName('amasty_xlanding_page_product', ['page_id']),
                ['page_id']
            )
            ->addIndex(
                $setup->getIdxName(
                    'amasty_xlanding_page_product',
                    ['page_id', 'product_id', 'store_id'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
                ),
                ['page_id', 'product_id', 'store_id'],
                ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
            )
            ->addForeignKey(
                $setup->getFkName(
                    'amasty_xlanding_page_product',
                    'product_id',
                    'catalog_product_entity',
                    'entity_id'
                ),
                'product_id',
                $setup->getTable('catalog_product_entity'),
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )
            ->setComment('Catalog Product To Laning Page Linkage Table');
        $setup->getConnection()->createTable($table);

        /**
         * Create table 'catalog_category_product'
         */
        $table = $setup->getConnection()
            ->newTable($setup->getTable('amasty_xlanding_page_product_index'))
            ->addColumn(
                'page_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Page ID'
            )
            ->addColumn(
                'product_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Product ID'
            )
            ->addColumn(
                'store_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Store ID'
            )
            ->addColumn(
                'position',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['nullable' => false, 'default' => '0'],
                'Position'
            )
            ->addIndex(
                $setup->getIdxName('amasty_xlanding_page_product_index', ['product_id']),
                ['product_id']
            )
            ->addIndex(
                $setup->getIdxName('amasty_xlanding_page_product_index', ['page_id']),
                ['page_id']
            )
            ->addIndex(
                $setup->getIdxName(
                    'amasty_xlanding_page_product_index',
                    ['page_id', 'product_id', 'store_id'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
                ),
                ['page_id', 'product_id', 'store_id'],
                ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
            )
            ->addForeignKey(
                $setup->getFkName(
                    'amasty_xlanding_page_product_index',
                    'product_id',
                    'catalog_product_entity',
                    'entity_id'
                ),
                'product_id',
                $setup->getTable('catalog_product_entity'),
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )
            ->setComment('Catalog Product To Laning Page Linkage Index Table');
        $setup->getConnection()->createTable($table);
    }

    /**
     * @param SchemaSetupInterface $setup
     */
    protected function addSortOrderColumn(SchemaSetupInterface $setup)
    {
        $installer = $setup;
        $connection = $installer->getConnection();
        $connection->addColumn(
            $setup->getTable('amasty_xlanding_page'),
            'meta_data',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                'nullable' => false,
                'default'   => 0,
                'comment' => 'Products Sort Order'
            ]
        );
    }

    /**
     * @param SchemaSetupInterface $setup
     */
    private function addIndexFields(SchemaSetupInterface $setup)
    {
        $installer = $setup;
        $connection = $installer->getConnection();
        $connection->addIndex(
            $installer->getTable('amasty_xlanding_page'),
            $setup->getIdxName(
                $installer->getTable('amasty_xlanding_page'),
                ['layout_bottom_description', 'layout_top_description'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            ['layout_bottom_description', 'layout_top_description'],
            AdapterInterface::INDEX_TYPE_FULLTEXT
        );
    }

    /**
     * @param SchemaSetupInterface $setup
     */
    protected function changeMetaData(SchemaSetupInterface $setup)
    {
        $installer = $setup;
        $connection = $installer->getConnection();
        $table = $setup->getTable('amasty_xlanding_page');

        $select = $connection->select()->from($table, ['page_id', 'meta_title', 'meta_keywords', 'meta_description']);

        $connection->addColumn(
            $setup->getTable('amasty_xlanding_page'),
            'meta_data',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'nullable' => true,
                'comment' => 'Meta data'
            ]
        );

        foreach ($connection->fetchAll($select) as $page) {
            $metaData = [];
            foreach ($this->storeManager->getStores() as $store) {
                $metaData[$store->getId()] = [
                    'meta_title_' . $store->getId() => $page['meta_title'],
                    'meta_keywords_' . $store->getId() => $page['meta_keywords'],
                    'meta_description_' . $store->getId() => $page['meta_description']
                ];
            }
            $metaData = $this->serializer->serialize($metaData);
            $sql = 'UPDATE ' . $table . ' SET `meta_data` = :metaData WHERE `page_id` = :pageId;';
            $setup->getConnection()->query($sql, [
                'metaData' => $metaData,
                'pageId' => $page['page_id']
            ]);
        }

        $connection->dropColumn($setup->getTable('amasty_xlanding_page'), 'meta_title');
        $connection->dropColumn($setup->getTable('amasty_xlanding_page'), 'meta_keywords');
        $connection->dropColumn($setup->getTable('amasty_xlanding_page'), 'meta_description');
    }
}
