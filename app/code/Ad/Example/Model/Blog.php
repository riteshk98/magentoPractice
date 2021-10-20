<?php
namespace Ad\Example\Model;

use Magento\Framework\Model\AbstractModel;
use Ad\Example\Model\ResourceModel\Blog as BlogResourceModel;

class Blog extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(BlogResourceModel::class);
    }
}