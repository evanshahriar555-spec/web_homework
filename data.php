<?php
header("Content-Type: application/json; charset=utf-8");
include 'db.php';
 
if ($dbh === null) {
    echo json_encode(['error' => $db_connection_error ?? 'Database connection failed']);
    exit;
}
 
try {
    $stmt = $dbh->prepare(
        'SELECT student_id, assessment_date, mark, assessment_type FROM students_records ORDER BY assessment_date, student_id'
    );
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
 