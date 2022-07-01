<?php 
namespace Frankie\HelloWorldv2\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb{

    protected function _construct(){
        $this->_init('helloworldv2_item','id');
    }

}
