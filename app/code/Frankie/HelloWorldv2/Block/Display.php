<?php
namespace Frankie\HelloWorldv2\Block;

use Frankie\HelloWorldv2\Model\ResourceModel\Item\Collection;
use Frankie\HelloWorldv2\Model\ResourceModel\Item\CollectionFactory;

class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
		CollectionFactory $collectionFactory,
		array $data =[]
	)
	{
		$this->collectionFactory = $collectionFactory;
		parent::__construct($context,$data);
	}

	/***
	@return \Frankie\HelloWorldv2\Model\Item[]
	**/
	public function getItems(){

		return $this->collectionFactory->create()->getItems();

	}



	public function sayHello()
	{
		return __('Hello World v2');
	}
}
