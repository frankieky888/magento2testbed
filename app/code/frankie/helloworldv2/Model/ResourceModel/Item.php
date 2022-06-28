<?php 
namespace frankie\helloworldv2\Model\ResourceModel;

use Magento\TestFramework\Db\AbstractDb;

class Item extends AbstractDb{

    protected function __construct(){
        $this->_init('helloworldv2_item','id');
    }

}
