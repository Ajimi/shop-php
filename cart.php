<?php require_once 'config.php';
    require_once 'core/init.php';

?>
    

<?php include TEMPLATE_FRONT . DS .'cart' . DS . 'header_cart.php';?>		
<div class="top container-fluid breadcrumbBox text-center">
    <ol class="breadcrumb">
        <li class="active"><a href="#">Order</a></li>
        <li><a href="#">Payment</a></li>
    </ol>
</div>

<?php include TEMPLATE_FRONT . DS . 'cart' . DS . 'cart_content.php'; ?>

<?php include TEMPLATE_FRONT . DS . 'cart' . DS . 'footer_cart.php'; ?>

