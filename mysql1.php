<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'testdb';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
echo "Connected successfully<br>";

// Create DB
$sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('Could not create database: ' . mysqli_error($conn));
}
echo "Database $dbname created successfully<br>";

// Select DB
if (!mysqli_select_db($conn, $dbname)) {
    die('Could not select database: ' . mysqli_error($conn));
}

// Create table
$sql = "
CREATE TABLE IF NOT EXISTS employee (
    emp_id INT NOT NULL AUTO_INCREMENT,
    emp_name VARCHAR(20) NOT NULL,
    emp_address VARCHAR(20) NOT NULL,
    emp_salary INT NOT NULL,
    PRIMARY KEY (emp_id)
)";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('Could not create table: ' . mysqli_error($conn));
}
echo "Table employee created successfully<br>";

// Insert row
$sql = "INSERT INTO employee(emp_name, emp_address, emp_salary)
        VALUES ('John', 'Riga', 2500)";
$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('Could not enter data: ' . mysqli_error($conn));
}
echo "Entered data successfully<br>";

mysqli_close($conn);
?>
