<?php
namespace Rk\Superhero\Model\ResourceModel\Hero;


use Rk\Superhero\Model\Hero;
use Rk\Superhero\Model\ResourceModel\Hero as HeroResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Hero::class, HeroResourceModel::class);
    }
}