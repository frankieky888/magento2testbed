<?php 
namespace Frankie\HelloWorldv2\Model;

use Frankie\HelloWorldv2\Model\ResourceModel\Item as ResourceItem;
use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel{

    protected function _construct(){
        $this->_init(ResourceItem::class);
    }

}
