<?php

class Test extends Dbh
{
    // READ
    // get all users' firstname
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['users_firstname'] . '<br/>';
        }
    }

    // READ
    // get data based on user input
    // fetchall gets all matching records
    public function getUsersStmt($first, $last)
    {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$first, $last]);
        $names = $stmt->fetchAll();
        foreach ($names as $name) {
            echo $name['users_firstname'] . '<br/>';
        }
    }

    // CREATE
    public function setUsersStmt($first, $last, $dob)
    {
        $sql = "INSERT INTO users(users_firstname,users_lastname,users_dateofbirth) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$first, $last, $dob]);
    }
}
