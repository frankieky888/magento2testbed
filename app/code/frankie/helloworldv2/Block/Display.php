<?php
namespace Frankie\helloworldv2\Block;
use Magento\Framework\View\Element\Template;
use Frankie\helloworldv2\Model\ResourceModel\Item\Collection;
use Frankie\helloworldv2\Model\ResourceModel\Item\CollectionFactory;


class Display extends Template{

    public function __construct(
            Templete\Context $context,
            CollectionFactory $collectionFactory,
            array $data =[]
    ){

        $this->collectionFactory = collectionFactory;
        parent::__construct($context,$data)

    }

    /***
    @return \Mastering\SampleModule\Model\Item[]
    **/
    public function getItems(){

    return $this->collectionFactory->create()->getItems();

    }


}

