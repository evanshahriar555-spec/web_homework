<?php
header("Content-Type: application/json");
include 'db.php'; 

try {
    
    $stmt = $dbh->prepare("SELECT * FROM students_records");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    echo json_encode($result);
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>