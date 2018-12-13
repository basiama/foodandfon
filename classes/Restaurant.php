<?php

class Restaurant {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function create($data){
        $sql = 'INSERT INTO Restaurant (name, address, image_url, phone_no, tables, user_id, menu_id, created_at, updated_at, opening_time, closing_time) VALUES (:name, :address, :image_url, :phone_no, :tables, :user_id, :menu_id, :created_at, :updated_at, :opening_time, :closing_time)';

        $this->db->query($sql);
        
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':image_url', $data['Image_url']);
        $this->db->bind(':phone_no', $data['phone_no']);
        $this->db->bind(':tables', $data['tables']);
        $this->db->bind(':user_id', $session['user_id']);
        $this->db->bind(':menu_id', $data['menu_id']);
        $this->db->bind(':created_at', $data['created_at']);
        $this->db->bind(':updated_at', $data['updated_at']);
        $this->db->bind(':opening_time', $data['opening_time']);
        $this->db->bind(':closing_time', $data['closing_time']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        } 
    }

    public function get_my_Restaurant ($data){
        $sql = 'SELECT * FROM Restaurant WHERE user_id = :user_id';
        $this->db->query($sql);

        $this->db->bind(':user_id', $data['user_id']);

        $result = $this->db->multiple();

        if($this->db->rowCount() > 0){
            $this->setRestaurantData($result);
            return true;
        } else {
            return false;
        }

    }

}