<?php

namespace Frankie\HelloWorldv2\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();
        if(version_compare($context->getVersion(),'1.0.1','<=')){
            $table = $setup->getConnection()->newTable(
                    $setup->getTable("helloworldv2_item")
            )->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity'=>true,'nullable'=>false,'primary'=>true]
            )->addColumn(
                    'name', 
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'=>false],
                    'Item Name'      
            )->addIndex(
                    $setup->getIdxName(
                            'helloworldv2_item', 
                            ['name']
                    ),
                    ['name']
            )->setComment('Sample helloworldv2_item');
            $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }

}
   