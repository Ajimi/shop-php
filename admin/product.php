<?php

require_once 'config.php';
require_once 'core/init.php';
$user = new User(); //Current

if($user->isLoggedIn()) {
?>

        
    <?php include TEMPLATE_FRONT .DS. 'product' . DS . 'product_header.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'product' . DS . 'product_content.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'product' . DS . 'product_footer.php' ?>
<?php } ?>