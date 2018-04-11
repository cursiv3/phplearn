<?php
    function getData($type) {
        include './config.php';
        
        $connection = mysqli_connect($host, $username, $password, $database);
        
        $result = mysqli_query($connection, "SELECT * FROM " + $type + ";");

        return $result;
    }
?>