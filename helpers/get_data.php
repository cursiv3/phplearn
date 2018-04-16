<?php
function get_data($type, $field)
{
    include './config.php';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query;
    if ($field == "category") {
        $query = "SELECT DISTINCT category FROM {$type};";
    } else {
        $query = "SELECT * FROM {$type};";
    }
    $result = mysqli_query($connection, $query);
    $fields = array();
    while ($row = $result->fetch_assoc()) {
        $fields[] = $row[$field];
    }

    return $fields;
}
