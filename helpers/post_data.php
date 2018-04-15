<?php
function post_data($table, $field, $val)
{
    include './config.php';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $post = mysqli_query($connection, "INSERT INTO $table ($field) VALUES ($val)");

    mysqli_close($connection);
}
