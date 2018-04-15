<?php
function get_data($type, $field)
{
    include './config.php';

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $result = mysqli_query($connection, "SELECT * FROM " . $type . ";");
    $fields = array();
    while ($row = $result->fetch_assoc()) {
        $fields[] = $row[$field];
    }

    return $fields;
}
