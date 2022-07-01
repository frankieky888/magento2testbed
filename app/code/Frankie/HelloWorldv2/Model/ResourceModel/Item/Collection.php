<?php 
namespace Frankie\HelloWorldv2\Model\ResourceModel;

use Magento\Catalog\Model\ResourceModel\AbstractCollection;
use Frankie\HelloWorldv2\Model\Item;
use Frankie\HelloWorldv2\Model\ResourceModel\Item as ItemResource;



class Collection extends AbstractCollection{

    protected $_idFieldName='id';

    protected function _construct(){

        $this->_init(
            Item::class,ItemResource::class
        );

    }


}
