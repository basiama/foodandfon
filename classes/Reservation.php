<?php

class Restaurant {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function create_Reservtion($data){
        $sql = 'INSERT INTO Reservation (user_id, restaurant_id, comment ) VALUES (:user_id, :restaurant_id, :comment)';

        $this->db->query($sql);

        $this->db->bind(':user_id', $session['user_id']);
        $this->db->bind(':restaurant_id', $data['restaurant_id']);
        $this->db->bind(':comment', $data['comment']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        } 
    }

    public function get_Reservation ($data){
        $sql = 'SELECT * FROM Reservation WHERE restaurant_id = :restaurant_id';
        $this->db->query($sql);

        $this->db->bind(':restaurant_id', $data['restaurant_id']);

        $result = $this->db->multiple();

        if($this->db->rowCount() > 0){
            $this->setRestaurantData($result);
            return true;
        } else {
            return false;
        }

    }

}