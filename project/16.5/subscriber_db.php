<?php

    // Connect to the remote database
    function remote_connect() {
    
    //$host = 'localhost';
    $port = '3306';
    $dbname = 'jessigc3_subscribers';
    $username = 'jessigc3_bacs350';
    $password = 'Busterbrown22!';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        
        
        return db_connect($db_connect, $username, $password);

    }

    // Open the database or die
    function db_connect($db_connect, $username, $password) {
        
//        echo "<h2>DB Connection</h2><p>Connect String:  $db_connect, $username, $password</p>";
        try {
            $db = new PDO($db_connect, $username, $password);
//             echo '<p><b>Successful Connection</b></p>';
            return $db;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }

    }


    // Open the database or die
    function subscribers_connect() {
        
        $local = ($_SERVER['SERVER_NAME'] == 'localhost');
        if ($local) {
            return local_connect();
        } 
        else {
            return remote_connect();
        }
        
    }

?>
