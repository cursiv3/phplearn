<?php
    include '../config.php';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $category = $_POST['category'];
    $body = $_POST['item'];
    

    if(mysqli_query($connection, "INSERT INTO items (id, category, body) VALUES (1, '$category', '$body')")) {
        echo "posted correctly";
    }  else {
        echo "error";
        echo $category;
        echo $body;
    }

    mysqli_close($connection);
    header('Location: http://phptest/');
    exit();
