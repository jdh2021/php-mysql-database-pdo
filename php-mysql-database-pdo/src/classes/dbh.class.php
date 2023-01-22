<?php

class Dbh {
    // private properties b/c database info
    // local host on computer, these parameters are for XAMPP
    private $host = "localhost";
    private $user = "root";
    // empty b/c pw not set for local database
    private $pwd = "";
    private $dbName = "mysqlpdotest";

    // method contains connection to db
    protected function connect() {
        /* set DSN (data source name), 
        -what type of database we're using
        -what type of POST we're using
        -what database name is
        */
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        // create new PDO connection, add dsn info with u/n and pw
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        // optional parameter to say how we want to retrieve data, assoc are associative arrays
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // return the connection
        return $pdo;
    }
}


// don't use closing tag for php, white space can create error