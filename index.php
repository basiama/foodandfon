<?php require('core/init.php'); ?>

<?php
$user = new User;

$template = new Template('templates/index.php');

echo $template;

?>