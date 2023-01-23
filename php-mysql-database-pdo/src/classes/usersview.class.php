<?php

// usersview is acting as view in MVC model, fetches information
class UsersView extends Users {
    
    public function showUser($firstname) {
        // fetch data from users class, refer to user class methods with variable $this
        $results = $this->getUser($firstname);
        echo "Full name: " . $results[0]['user_firstname'] . " " . $results[0]['user_lastname'] . "<br>";
        echo "Date of birth: " . $results[0]['user_dateofbirth'];
    }
}