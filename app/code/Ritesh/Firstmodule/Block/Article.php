<?php
namespace Ritesh\Firstmodule\Block;

use \Magento\Framework\View\Element\Template;

class Article extends Template
{
    protected $var1;
    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
    */
    public function __construct(


        \Magento\Backend\Block\Template\Context $context,
        array $data = [],
        $var1 = []
    ){
        $this->var1 = $var1;

        // echo($var1);
        // var_dump($var1);
        // exit();
        parent::__construct($context, $data);
     }

    /**
     * @return Post[]
    */
    public function getArticles()
    {
        var_dump($this->var1);
        exit();

        return 'getArticles function of the Block class called successfully';
    }
}
?>
