<?php

namespace Ad\Example\Controller\Feedback;

use Ad\Example\Model\Blog;
use Ad\Example\Model\ResourceModel\Blog as BlogResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Save extends Action
{
    /**
     * @var Blog
     */
    private $blog;
    /**
     * @var BlogResourceModel
     */
    private $blogResourceModel;

    /**
     * Add constructor.
     * @param Context $context
     * @param Blog $blog
     * @param BlogResourceModel $blogResourceModel
     */
    public function __construct(
        Context $context,
        Blog $blog,
        BlogResourceModel $blogResourceModel
    ) {
        $this->blog = $blog;
        $this->blogResourceModel = $blogResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $blog = $this->blog->setData($params);//TODO: Challenge Modify here to support the edit save functionality
        try {
            $this->blogResourceModel->save($blog);
            $this->messageManager->addSuccessMessage(__("Successfully added the Feedback %1", $params['name']));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        /* Redirect back to hero display page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('example');
        return $redirect;
    }
}