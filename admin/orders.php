<?php

require_once 'config.php';
require_once 'core/init.php';
$user = new User(); //Current

if($user->isLoggedIn()) {
?>

        
    <?php include TEMPLATE_FRONT .DS. 'orders' . DS . 'orders_header.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'orders' . DS . 'orders_content.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'orders' . DS . 'orders_footer.php' ?>
<?php } ?>