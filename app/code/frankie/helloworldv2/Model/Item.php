<?php 
namespace frankie\helloworldv2\Model;

use frankie\helloworldv2\Model\ResourceModel\Item as ResourceItem;
use Magento\Sales\Model\AbstractModel;

class Item extends AbstractModel{

    protected function __construct(){
        $this->_init(ResourceItem::class);
    }

}
