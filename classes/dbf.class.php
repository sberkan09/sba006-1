<?php

include 'dbh.class.php';

class Dbf extends Dbh {
    
    public function getUsers() {
        $sql = 'SELECT * FROM users';
        $stmt = $this->connect()->query($sql);
        $users = [];
        while ($row = $stmt->fetch()) {
            $users[] = ['id' => $row['idusers'], 'username' => $row['username'], 'password' => $row['password'], 'created_at' => $row['created_at']];
        }
        return $users;
    }


}
