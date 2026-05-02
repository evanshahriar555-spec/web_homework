<?php

$host = 'localhost';
$dbname = 'student_db'; 
$username = 'root';     
$password = '';         

try {
       $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
   
} 
catch (PDOException $e) 
{
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>