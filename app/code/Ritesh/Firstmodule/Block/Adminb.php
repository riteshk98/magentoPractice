<?php
namespace Ritesh\Firstmodule\Block;

use \Magento\Framework\View\Element\Template;

class Adminb extends \Magento\Framework\View\Element\Template
{
    
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ){
        echo "Hello";
        exit;
        parent::__construct($context, $data);
     }




    public function _prepareLayout() {
            return parent::_prepareLayout();
    }

//prepare layout
    // public function getWidgetTitle()
    // {
    //     return $this->getData('widget_title');
    // }


    /**
     * @return Post[]
    */

    // public function getArticles()
    // {
    //     return 'getArticles function of the Block class called successfully';
    // }
}

