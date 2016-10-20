<?php 
namespace Md\Subscriptions\Controller\Index; 
 
class Test extends \Magento\Framework\App\Action\Action {
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
		\Magento\Framework\Controller\Result\JsonFactory    $resultJsonFactory)     {
        $this->resultPageFactory = $resultPageFactory;
		$this->resultJsonFactory            = $resultJsonFactory;
        parent::__construct($context);
    }
 
    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
    	 $result                 = $this->resultJsonFactory->create();
        if ($this->getRequest()->isAjax()) 
        {
            $test=Array
            (
                'Firstname' => 'What is your firstname',
                'Email' => 'What is your emailId',
                'Lastname' => 'What is your lastname',
                'Country' => 'Your Country'
            );
            return $result->setData($test);
        }
    }
}