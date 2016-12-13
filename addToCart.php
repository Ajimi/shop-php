<?php 
	
	require_once 'core/init.php';
	$cart = new Cart();	
	if(Input::exists('get')){
		$id = Input::get('add');
		echo $id;
		$cart->incrementProductQuantity($id);
	}
?>

