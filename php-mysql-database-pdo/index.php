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
        
    ?>
</body>
</html>