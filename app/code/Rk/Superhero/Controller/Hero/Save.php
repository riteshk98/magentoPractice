<?php

namespace Rk\Superhero\Controller\Hero;

use Rk\Superhero\Model\Hero;
use Rk\Superhero\Model\ResourceModel\Hero as HeroResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Save extends Action
{
    /**
     * @var Hero
     */
    private $hero;
    /**
     * @var HeroResourceModel
     */
    private $heroResourceModel;

    /**
     * Add constructor.
     * @param Context $context
     * @param Hero $hero
     * @param HeroResourceModel $heroResourceModel
     */
    public function __construct(
        Context $context,
        Hero $hero,
        HeroResourceModel $heroResourceModel
    ) {
        $this->hero = $hero;
        $this->heroResourceModel = $heroResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $hero = $this->hero->setData($params);//TODO: Challenge Modify here to support the edit save functionality
        try {
            $this->heroResourceModel->save($hero);
            $this->messageManager->addSuccessMessage(__("Successfully added the Hero "));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        /* Redirect back to hero display page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('superhero');
        return $redirect;
    }
}