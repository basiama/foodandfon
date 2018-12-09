<?php

class User {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function register($data){
        $sql = 'INSERT INTO user (name, email, phone_no, password, user_type, gender, image_url, created_at, updated_at) VALUES (:name, :email, :phone_no, :password, :user_type, :gender, :image_url, :created_at, :updated_at)';

        $this->db->query($sql);
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone_no', $data['phone_no']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':user_type', $data['user_type']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':image_url', $data['image_url']);
        $this->db->bind(':created_at', $data['created_at']);
        $this->db->bind(':updated_at', $data['updated_at']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        } 
    }

    public function login($data){
        $sql = 'SELECT * FROM user WHERE email = :email and password = :password';
        $this->db->query($sql);

        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        $result = $this->db->single();

        if($this->db->rowCount() > 0){
            $this->setUserData($result);
            return true;
        } else {
            return false;
        }

    }

    public function setUserData($result){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['image_url'] = $result['image_url'];
        $_SESSION['user_type'] = $result['user_type'];

    }


    public function uploadProfilePicture(){
        // $allowedExts = array("gif","jpg","jpeg","png");
        $temp = explode(".",$_FILES['picture']['name']);
        // $extention = end($temp);

        move_uploaded_file($_FILES['picture']['tmp_name'], "images/pictures/profile".$_FILES['profile']['name']);
        return true;
    }

    public function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        unset($_SESSION['image_url']);
        unset($_SESSION['user_type']);
        
    }

}