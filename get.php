<?php 
	
	require_once 'core/init.php';
	$product = new Product();	
	if(Input::exists('get')){
		$id = Input::get('add');
		$product->incrementProductQuantity($id);
		
	}
?>

