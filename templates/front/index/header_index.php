<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Product List</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/product-lists/product-list-basic.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Gem style -->
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
            <li><a class="current" href="#0">Shop</a></li>
            <li><a href="#0">About</a></li>
            <li><a href="#0">Services</a></li>
            <li><a href="items.php">Items</a></li>
            <li><a href="checkout.php">Checkout</a></li>
            <li><a href="#0">Contact</a></li>
            <li><a href="#0">Contact</a></li>
        </ul>
    </nav>

    <?php include TEMPLATE_FRONT . DS . 'side_cart.php' ?> 
