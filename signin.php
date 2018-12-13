<?php require('core/init.php'); ?>
<?php

$user = new User;

if(isset($_POST['signin'])){
    $data = array();
    $data['email'] = $_POST['email'];
    $data['password'] = md5($_POST['password']);
  
    if($user->login($data)){
        return header('Location: index.php');
        // exit();
    } else {
        // echo "<h1>Error</h1>";
    }
}


$template = new Template('templates/signin.php');

echo $template;

?>