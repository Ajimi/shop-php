<?php

require_once 'config.php';
require_once 'core/init.php';


if(Session::exists('home')) {
    echo '<p>' . Session::flash('home'). '</p>';
}

$user = new User(); //Current

if($user->isLoggedIn()) {
?>

    <p>Hello, <a href="profile.php?user=<?php echo escape($user->data()->username);?>"><?php echo escape($user->data()->username); ?></p>

    <ul>
        <li><a href="update.php">Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li><a href="logout.php">Log out</a></li>
    </ul>
        
    <?php include TEMPLATE_FRONT .DS. 'index' . DS . 'index_header.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'index' . DS . 'index_content.php'; ?>

    <?php include TEMPLATE_FRONT . DS . 'index' . DS . 'index_footer.php' ?>
<?php

    if($user->hasPermission('admin')) {
        echo '<p>You are a Administrator!</p>';
    }

} else {
    include 'login.php';
}

?>

        