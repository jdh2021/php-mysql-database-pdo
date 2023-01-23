<?php

// userscontr is acting as controller in MVC model, insersts and/or updates information
class UsersContr extends Users {
    // add parameters that are referenced in method in setUser in users class 
    public function createUser($firstname, $lastname, $dob) {
        $this->setUser($firstname, $lastname, $dob);
    }    
}