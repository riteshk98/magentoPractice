<?php

namespace Ad\Example\Block;

use Ad\Example\Model\ResourceModel\Blog\Collection;
use Magento\Framework\View\Element\Template;

class Display extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Display constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    ) {
        $this->collection = $collection;
        parent::__construct($context, $data);
    }

    // /**
    //  * @return Collection
    //  */
    // public function getAllSuperHeroes()
    // {
    //     return $this->collection;
    // }

    /**
     * @return string
     */
    public function getPostUrl()
    {
        return $this->getUrl('example/feedback/save');
    }

    // /**
    //  * @return string
    //  */
    // public function getEditPageUrl()
    // {
    //     return $this->getUrl('superhero/hero/edit');
    // }

    // /**
    //  * @return string
    //  */
    // public function getDeleteUrl()
    // {
    //     return $this->getUrl('superhero/hero/delete');
    // }
}