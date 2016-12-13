<?php
	require_once 'core/init.php';
	$cart = new Cart();
?>

<li class="row list-inline columnCaptions">
	<span>QTY</span>
	<span>ITEM</span>
	<span>Price</span>
</li>
<?php $cart->showItemCart(1); ?>
<!--<li class="row">
	<span class="quantity">1</span>
	<span class="itemName">Birthday Cake</span>
	<span class="popbtn"><a class="arrow"></a></span>
	<span class="price">$49.95</span>
</li>
<li class="row">
	<span class="quantity">50</span>
	<span class="itemName">Party Cups</span>
	<span class="popbtn"><a class="arrow"></a></span>
	<span class="price">$5.00</span>
</li>
<li class="row">
	<span class="quantity">20</span>
	<span class="itemName">Beer kegs</span>
	<span class="popbtn"><a class="arrow"></a></span>
	<span class="price">$919.99</span>				
</li>
<li class="row">
	<span class="quantity">18</span>
	<span class="itemName">Pound of beef</span>
	<span class="popbtn"><a class="arrow"></a></span>
	<span class="price">$269.45</span>
</li>
<li class="row">
	<span class="quantity">1</span>
	<span class="itemName">Bullet-proof vest</span>
	<span class="popbtn"  data-parent="#asd" data-toggle="collapse" data-target="#demo"><a class="arrow"></a></span>
	<span class="price">$450.00</span>				
</li> -->
<li class="row totals">
	<span class="itemName">Total:</span>
	<span class="price total">$<?php echo Session::get('total')?>.00</span>
	<span class="order"> <a class="text-center">ORDER</a></span>
</li>