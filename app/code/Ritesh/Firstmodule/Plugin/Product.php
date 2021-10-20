<?php

namespace Ritesh\Firstmodule\Plugin;

class Product{
// 	public function afterGetName(\Magento\Catalog\Model\Product $product, $name){
// 	$price= $product->getData('price');
// 	// if($price < 4999){
// 	// 	// $name .="<p class="offer"> Limited Time</p>";
// 	// 	$name .=" Limited Time";
	
// 	// }else{
// 	// 	$name .="<p style='color:Blue;'> Can be Better</p>";
// 	// 	// $name .=" Can be Better";
// 	// }
// 	// echo "Hello";
	
// 	// return $name = $name ."<p style= 'color:Blue;'>kk</p>";
// 	// return "jj"; //this cannot be null. must return
// }
// public function beforeGetName(\Magento\Catalog\Model\Product $product){//cannot use before on get name
// 	// $price= $product->getData('price');
// 	// if($price < 4999){
// 	// 	// $name .="<p class="offer"> Limited Time</p>";
// 	// 	$name .=" Limited Time";
	
// 	// }else{
// 	// 	$name .="<p style='color:Blue;'> Can be Better</p>";
// 	// 	// $name .=" Can be Better";
// 	// }
// 	// echo "Hello";
	
// 	// return $name = $name ."<p style= 'color:Blue;'>kk</p>";
// 	// echo "Hello World";
// 	// exit();
// 	return "hh";
// }

	public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        return ['bbbbbb'];//return not necessary
    }
	// public function afterSetName(\Magento\Catalog\Model\Product $subject, $name)
 //    {
 //  //   	foreach($subject->getData() as $value){
 //  //   		print_r($value);

 //  //   	}
 	
 // 	// exit();
 //        return ['lllll'];//return not necessary
 //    }
}

