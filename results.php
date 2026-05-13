<?php
session_start();
require_once "auth_guard.php";
require_once "config.php";

// Get student id first
$stmt = $conn->prepare("SELECT id FROM students WHERE user_id = ?");
$stmt->bind_param("i", $_SESSION["user_id"]);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();
$student_id = $student["id"];

// Get results with course names
$stmt2 = $conn->prepare("SELECT c.course_code, c.course_name, c.unit, r.score, r.grade
FROM results r
JOIN courses c ON r.course_id = c.id
WHERE r.student_id = ?");
$stmt2->bind_param("i", $student_id);
$stmt2->execute();
$results = $stmt2->get_result();

require_once "results_view.php";
?>