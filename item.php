<?php
	require_once 'core/init.php';
	$product = new Product();
	$requestType = 'get';
	if(Input::exists($requestType)){
		$product->showByReference(Input::get('ref'));
	} else {
		
	}