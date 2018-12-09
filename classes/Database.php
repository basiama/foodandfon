<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbnme = DB_NAME;

    private $dbh;
    private $error;
    private $sth;

    public function __construct(){
        $dsn ='mysql:host='. $this->host .';dbname='. $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query) {
        $this->sth = $this->dbh->prepare($query);
    }

    public function bind($params, $value, $type=null) {
        if(is_null($type)) {
            switch(true) {
                case is_init($value):
                    $type = PDO::PARAM_INIT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->sth->bindValue($param, $value, $type);        
    }

    public function execute(){
        return $this->sth->execute();
    }

    public function resultset(){
        $this->execute();
        return $this->sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->sth->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->sth->rowCount();
    }

    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }
    
    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }

    public function endTransaction(){
        return $this->dbh->rollBack();
    }

    public function cancelTransaction(){
        return $this->dbh->rollBack();
    }

    public function debugDumpParams(){
        return $this->sth->debugDumpParams();
    }
}