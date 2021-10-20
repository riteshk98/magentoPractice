<?php
namespace Ad\Example\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Ad\Example\Model\Blog as BlogModel;
use Ad\Example\Model\ResourceModel\Blog as BlogResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(BlogModel::class, BlogResourceModel::class);
    }
}