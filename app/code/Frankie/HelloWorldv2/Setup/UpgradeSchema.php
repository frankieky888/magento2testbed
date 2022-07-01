<?php

namespace Frankie\HelloWorldv2\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
class UpgradeSchema implements UpgradeSchemaInterface{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context){
        $setup->startSetup();


        if(version_compare($context->getVersion(),'1.0.2','<')){
        //add a column
            $setup->getConnection()->addColumn(
                $setup->getTable('helloworldv2_item') ,   //tablename
                'description',
                [
                    'type'=>Table::TYPE_TEXT,
                    'nullable'=>true,
                    'comment'=>'Item description'
                ]
            );
        }
        $setup->endSetup();

    }

}


