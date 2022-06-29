<?php 
namespace frankie\helloworldv2\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

abstract class Item extends AbstractDb{

    protected function __construct(){
        $this->_init('helloworldv2_item','id');
    }

}
