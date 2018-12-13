<?php require('core/init.php'); ?>
<?php

$user = new User;
$user->logout();

header('Location: index');

?>