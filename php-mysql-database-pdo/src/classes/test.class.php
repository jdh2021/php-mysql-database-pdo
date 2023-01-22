<?php

// access db connection by extending to class Dbh
class Test extends Dbh {
    public function getUsers() {
        // without prepared statement - no user input
        $sql = "SELECT * FROM users";
        // point to connection inside dbh class, include SQL statement inside query
        $stmt = $this->connect()->query($sql);
        // default fetch mode was already set in Dbh class
        while($row = $stmt->fetch()) {
            echo $row['user_firstname'] . '<br>';
        }
    }

    // prepared statement - when we get user input
    public function getUsersStmt($firstname, $lastname) {
        $sql = "SELECT * FROM users WHERE user_firstname = ? AND user_lastname = ?";
        // first prepare without user input, prevents malicious injection
        $stmt = $this->connect()->prepare($sql);
        // fill in blanks, fields that have ? that were submitted by user. executes data to check in database.
        $stmt->execute([$firstname, $lastname]);
        // prepared statements. fetch will only get one row at a time. fetchAll will gets all result rows.
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['user_dateofbirth'] . '<br>';
        }
    }

    // prepared statement to insert into db
    public function setUsersStmt($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users(user_firstname, user_lastname, user_dateofbirth)
                VALUES(?, ?, ?)";
        // first prepare without user input, prevents malicious injection
        $stmt = $this->connect()->prepare($sql);
        // then execute the statment
        $stmt->execute([$firstname, $lastname, $dob]);
    }
}