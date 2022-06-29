<?php
namespace frankie\helloworldv2\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
               // $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
		$result = $this->_pageFactory->create();
                return $result;

		
	}
}
