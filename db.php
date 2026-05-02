<?php
 
$host = 'localhost';
$dbname = 'student_db';
$username = 'root';
$password = '';
 
$dbh = null;
$db_connection_error = null;
 
try {
    $dbh = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    $db_connection_error = $e->getMessage();
}