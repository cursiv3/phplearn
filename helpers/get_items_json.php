<?php
function get_items_json()
{
    include './config.php';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $result = mysqli_query($connection, "SELECT category, body FROM items;");
    $fields = array();
    while ($row = $result->fetch_assoc()) {
        $fields[] = $row;
    }

    echo json_encode($fields);
}
