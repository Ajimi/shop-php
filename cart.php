<?php require_once 'config.php';
    require_once 'core/init.php';

?>
    

    <?php include TEMPLATE_FRONT . DS . 'header_cart.php';?>		
		<div class="top container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Payment</a></li>
			</ol>
		</div>
		
		<?php include TEMPLATE_FRONT .DS. 'cart_content.php'; ?>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#0"><span class="glyphicon glyphicon-plus"></span></a>
			<a href="#""><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<div id="cd-shadow-layer"></div>

    <div id="cd-cart">
        <h2>Cart</h2>
        <ul class="cd-cart-items">
            <li>
                <span class="cd-qty">1x</span> Product Name
                <div class="cd-price">$9.99</div>
                <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
            </li>

            <li>
                <span class="cd-qty">2x</span> Product Name
                <div class="cd-price">$19.98</div>
                <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
            </li>

            <li>
                <span class="cd-qty">1x</span> Product Name
                <div class="cd-price">$9.99</div>
                <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
            </li>
        </ul> <!-- cd-cart-items -->

        <div class="cd-cart-total">
            <p>Total <span>$39.96</span></p>
        </div> <!-- cd-cart-total -->

        <a href="#0" class="checkout-btn">Checkout</a>
        
        <p class="cd-go-to-cart"><a href="#0">Go to cart page</a></p>
    </div> <!-- cd-cart -->


		<!-- JavaScript includes -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>
		<script src="assets/js/main.js"></script> <!-- Gem jQuery -->
		

	</body>
</html>