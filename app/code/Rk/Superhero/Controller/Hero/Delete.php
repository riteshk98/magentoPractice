<?php


namespace Rk\SuperHero\Controller\Hero;


use Magento\Framework\App\Action\Action;
use Rk\Superhero\Model\ResourceModel\Hero as HeroResourceModel;
use Rk\Superhero\Model\Hero;

class Delete extends Action
{
    /**
     * @var Hero
     */
    private $hero;
    protected $_request;
    /**
     * @var HeroResourceModel
     */
    private $heroResourceModel;


    public function __construct(
        \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\App\Action\Context $context,
        Hero $hero,
        HeroResourceModel $heroResourceModel
    ) {
        $this->_request = $request;
        $this->hero = $hero;
        $this->heroResourceModel = $heroResourceModel;
        parent::__construct($context);
    }



    public function execute()
    {
        $id = $this->_request->getParam('id');
        $hero = $this->hero->load($id);
        // $this->heroResourceModel->delete($hero);
          // $post = $this->hero->create();
          
        try {
            // $result = $hero->setId($id);
            $result = $hero->delete();
            // $this->heroResourceModel->delete($hero);
            $this->messageManager->addSuccessMessage(__("Successfully deleated the Hero"));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('superhero');
        return $redirect;
          // return $this->_redirect('crud/index/index');
        // TODO: Challenge Implement delete functionality in this execute() method.
    }
}


// <?php


// namespace Rk\Superhero\Controller\Hero;


// use Magento\Framework\App\Action\Action;
// use Rk\Superhero\Model\Hero;
// use Rk\Superhero\Model\ResourceModel\Hero as HeroResourceModel;
// use Magento\Framework\App\Action\Context;

// class Delete extends Action
// {
//     /**
//      * @var Hero
//      */
//     private $hero;
//     /**
//      * @var HeroResourceModel
//      */
//     private $heroResourceModel;

//     /**
//      * Add constructor.
//      * @param Context $context
//      * @param Hero $hero
//      * @param HeroResourceModel $heroResourceModel
//      */
//     public function __construct(
//         Context $context,
//         Hero $hero,
//         HeroResourceModel $heroResourceModel
//     ) {
//         $this->hero = $hero;
//         $this->heroResourceModel = $heroResourceModel;
//         parent::__construct($context);
//     }

//     public function execute()
//     {
//         $id = $this->_request->getParam('id');
//         $hero = $this->hero->setData($id);
//         try {
//             $this->heroResourceModel->delete($hero);
//             $this->messageManager->addSuccessMessage(__("Successfully deleated the Hero"));
//         } catch (\Exception $e) {
//             $this->messageManager->addErrorMessage(__("Something went wrong."));
//         }

//         $redirect = $this->resultRedirectFactory->create();
//         $redirect->setPath('superhero');
//         return $redirect;
//         // TODO: Challenge Implement delete functionality in this execute() method.
//     }
// }
