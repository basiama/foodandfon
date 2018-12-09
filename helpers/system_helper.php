<?php

function isLoggedIn(){
    if(isset($_SESSION['is_logged_in'])){
        return true;
    } else{
        return false;
    }
}


function getUserType(){
    if(isLoggedIn()) {
        return $_SESSION['user_type'];
    } else {
        return false;
    }
}