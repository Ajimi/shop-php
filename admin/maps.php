<?php

require_once 'config.php';
require_once 'core/init.php';
$user = new User(); //Current

if($user->isLoggedIn()) {
?>

        
    <?php include TEMPLATE_FRONT .DS. 'maps' . DS . 'maps_header.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'maps' . DS . 'maps_content.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'maps' . DS . 'maps_footer.php' ?>
<?php } ?>