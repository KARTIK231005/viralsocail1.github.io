<?php
// echo"welcome to this script   ";

$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";

try {
    $conn = new PDO("mysql:host=$SERVER", $USERNAME, $PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection established ...<br>";

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS user_query";
    $conn->exec($sql);
    // echo "Database created successfully...<br>";

    // Connect to the newly created database
    $conn->exec("USE user_query");

    // Create table with unique constraints
    $sql = "CREATE TABLE IF NOT EXISTS query_data (
        `s.no` BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL ,
        number VARCHAR(10) NOT NULL ,
        query VARCHAR(200) NOT NULL
    )";
    $conn->exec($sql);
    // echo "Table query_data created successfully...<br>";

} catch (PDOException $e) {
    echo "The connection failed: " . $e->getMessage();
    exit();
}
?>