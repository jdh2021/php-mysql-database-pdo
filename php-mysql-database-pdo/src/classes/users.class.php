<?php

// users class is acting as model in MVC model, only class that interacts with database
class Users extends Dbh {
    // get user from database, only usersview and userscont should be able to interact with it
    protected function getUser($firstname) {
        $sql = "SELECT * FROM users WHERE user_firstname= ?";
        // connect to database and prepare
        $stmt = $this->connect()->prepare($sql);
        // execute
        $stmt->execute([$firstname]);
        // fetch mode already set inside Dbh class to assoc arrays so don't need to insert inside fetchAll
        $results = $stmt->fetchAll();
        // insert data from database into array and pass on to userview class
        return $results;
    }

    // set in database, include parameters that will be updated
    protected function setUser($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users(user_firstname, user_lastname, user_dateofbirth)
                VALUES(?, ?, ?)";
        // first prepare without user input, prevents malicious injection
        $stmt = $this->connect()->prepare($sql);
        // then execute the statment
        $stmt->execute([$firstname, $lastname, $dob]);
    }

}
