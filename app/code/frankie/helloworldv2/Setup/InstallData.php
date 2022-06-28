<?php
namespace frankie\helloworldv2\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallSchemaInterface{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context){
        $setup->startSetup();
        if(version_compare($context->getVersion(),'1.0.1','<')){
            $table = $setup->getConnection()->insert(
                $setup->getTable('helloworldv2_item'),
                [
                    'name'=>'Item 1'
                ]
            );

            $table = $setup->getConnection()->insert(
                $setup->getTable('helloworldv2_item'),
                [
                    'name'=>'Item 2'
                ]
            );
        }
        $setup->endSetup();

    }
}