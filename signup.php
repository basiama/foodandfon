<?php require('core/init.php'); ?>

<?php

$user = new User;

if(isset($_POST['register'])){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['password'] = md5($_POST['password']);
    $data['phone_number'] = $_POST['phone_number'];
    $data['user_type'] = $_POST['user_type'];
    $data['gender'] = $_POST['gender'];
    $data['image_url'] = 'noimage.png';

    if($user->register($data)){
        echo "<h1>Success</h1>";
    } else {
        echo "<h1>Error</h1>";
    }
}


$template = new Template('templates/signup.php');

echo $template;

?>