<?php
	require_once 'core/init.php';
	$product = new Product();
	$requestType = 'get';
	if(Input::exists($requestType)){
		$product->showProductByReference(Input::get('ref'));
	} else {
		
	}