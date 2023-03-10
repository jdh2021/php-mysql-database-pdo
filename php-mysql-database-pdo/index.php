<?php
    include './src/includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>OOP PHP - Linking Database with PDO</title>
</head>
<body>
    <?php 
        // create an object
        $testObject = new Test();
        // without prepared statement (no user input)
        $testObject->getUsers();
        // with prepared statement (user input needed)
        $testObject->getUsersStmt('Jane', 'Doe');
        // with prepared statement, insert new record
        $testObject->setUsersStmt('Janet', 'Adams', '1977-06-15');

        // fetch information from database
        $usersObject = new UsersView();
        $usersObject ->showUser("Janet");

        // insert user into database
        $usersObject2 = new UsersContr();
        $usersObject2->createUser('Sarah', 'Smith', '1977-11-22');
    ?>
</body>
</html>