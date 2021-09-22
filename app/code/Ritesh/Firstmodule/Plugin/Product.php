<?php

namespace Ritesh\Firstmodule\Plugin;

class Product{
	public function afterGetName(\Magento\Catalog\Model\Product $product, $name){
	$price= $product->getData('price');
	if($price < 4999){
		// $name .="<p class="offer"'> Limited Time</p>";
		$name .=" Limited Time";
	
	}else{
		// $name .="<p style='color:Blue;'> Can be Better</p>";
		// $name .=" Can be Better";
	}
	
	return $name;
}
}

