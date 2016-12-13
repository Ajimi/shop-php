<?php 
    require_once 'config.php';
    require_once 'core/init.php';
    $cart = new Cart();

    // Create The Cart using the Session ..
?>

<div id="cd-shadow-layer"></div>
<div id="cd-cart">
    <h2>Cart</h2>
    <ul class="cd-cart-items">
        <?php  $cart->showItemCart(); ?>
    </ul> <!-- cd-cart-items -->

    <div class="cd-cart-total">
        <p>Total <span>$<?php echo Session::get('total'); ?></span></p>
    </div> <!-- cd-cart-total -->

    <a href="#0" class="checkout-btn">Checkout</a>
    
    <p class="cd-go-to-cart"><a href="#0">Go to cart page</a></p>
</div> <!-- cd-cart -->