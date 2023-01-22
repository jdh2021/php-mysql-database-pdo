<?php
    //built-in function that looks for new instantiated class
    // pass function inside parentheses
    spl_autoload_register('myAutoLoader');

    //user-defined function
    function myAutoLoader($className) {

        $path = "classes/";
        $extension =".class.php";
        $fullPath = $path . str_replace("\\", "/", $className) . $extension;

        // checks if file (or class) was found
        if(!file_exists($fullPath)) {
            return false;
        }
        require_once $fullPath;
    }
?>
