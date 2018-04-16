<?php
    include './config.php';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $category = $_POST['category'];
    $body = $_POST['item'];
    

    mysqli_query($connection, "INSERT INTO items (id, category, body) VALUES (1, $category, $body)");

    mysqli_close($connection);
