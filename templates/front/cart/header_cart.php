<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>
 		<link rel="stylesheet" href="assets/css/styles.css"> <!-- Gem style -->
    
    <script src="assets/js/modernizr.js"></script> <!-- Modernizr -->	
    
	</head>
	<body>
		
	<header>
        <div id="logo"><img src="assets/img/cd-logo.svg" alt="Homepage"></div>
        <div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
        <div id="cd-cart-trigger"><a class="cd-img-replace" href="#0">Cart</a></div>
	</header>

    <nav id="main-nav">
        <ul>
            <li><a href="index.php">Shop</a></li>
            <li><a href="#0">About</a></li>
            <li><a href="#0">Services</a></li>
            <li><a href="items.php">Items</a></li>
            <li><a class="current" href="checkout.php">Checkout</a></li>
            <li><a href="#0">Contact</a></li>
            <li><a href="#0">Contact</a></li>
        </ul>
    </nav>
    <div class="top container-fluid breadcrumbBox text-center">
        <ol class="breadcrumb">
            <li class="active"><a href="#">Order</a></li>
            <li><a href="#">Payment</a></li>
        </ol>
    </div>
<?php include TEMPLATE_FRONT . DS . 'side_cart.php' ?> 
