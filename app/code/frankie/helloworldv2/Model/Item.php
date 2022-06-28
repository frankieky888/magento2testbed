<?php 
namespace frankie\helloworldv2\Model;

class Item extends AbstractModel{

    protected function __construct(){
        $this->_init(frankie\helloworldv2\Model\ResourceModel\Item::class);
    }

}
