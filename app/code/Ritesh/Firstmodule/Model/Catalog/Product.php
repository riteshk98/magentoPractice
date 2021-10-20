<?php

namespace Ritesh\Firstmodule\Model\Catalog;

class Product extends \Magento\Catalog\Model\Product
{
	public function setName($name)
	{
	    return $this->setData(self::NAME, 'NEW NAME');
	}
}
?>