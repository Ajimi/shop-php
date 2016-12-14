<?php

require_once 'config.php';
require_once 'core/init.php';
$user = new User(); //Current

if($user->isLoggedIn()) {
?>

        
    <?php include TEMPLATE_FRONT .DS. 'user' . DS . 'user_header.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'user' . DS . 'user_content.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'user' . DS . 'user_footer.php' ?>
<?php } ?>