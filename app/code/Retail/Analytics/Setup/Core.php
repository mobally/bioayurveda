<?php

namespace Retail\Analytics\Setup;

use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\SchemaSetupInterface;


abstract class Core
{
    public function createRaaConfigTable(SchemaSetupInterface $installer)
    {
    	$tableName = $installer->getTable('raa_config');
        // Check if the table already exists
        if ($installer->getConnection()->isTableExists($tableName) != true) {
            // Create tutorial_simplenews table
            $table = $installer->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'unsigned' => true,
						'nullable' => false,
						'primary' => true,
						'identity' => true,
                    ],
                    'ID'
                )
                ->addColumn(
                    'raakey',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => true],
                    'Raakey'
                )
                ->addColumn(
                    'raavalue',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => true],
                    'Raavalue'
                )
                
                ->addColumn(
                    'created',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => true],
                    'Created'
                )
                ->setComment('Retail Analytics/raaconfig entity table')
                ->setOption('type', 'InnoDB')
                ->setOption('charset', 'utf8');
            $installer->getConnection()->createTable($table);
        }
    	
    }
    
}
