<?php
class HomeModel{
    public $db;

    public function CheckUserLogin($username, $password){
        $query = "SELECT count(*) FROM db_user WHERE  username='{$username}' AND password='{$password}'";
        $stmt = $this->db->prepare($query)->execute();
        return $stmt;
    }

    public function UserRegister($username, $password){
        $query = "INSERT INTO db_user (username, password)
                  VALUES ('".$username."', '".$password."')";
        $stmt = $this->db->query($query);
        return 1;
    }
}