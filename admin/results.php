<?php
session_start();
require_once "admin_guard.php";
require_once "../config.php";

$error = "";
$success = "";

// Get all students for dropdown
$students = $conn->query("SELECT s.id, s.full_name, s.matric_number FROM students s ORDER BY s.full_name ASC");

// Get all courses for dropdown
$courses = $conn->query("SELECT id, course_code, course_name FROM courses ORDER BY course_code ASC");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$student_id = $_POST["student_id"];
$course_id = $_POST["course_id"];
$score = $_POST["score"];

// Calculate grade
if ($score >= 70) $grade = "A";
elseif ($score >= 60) $grade = "B";
elseif ($score >= 50) $grade = "C";
elseif ($score >= 45) $grade = "D";
elseif ($score >= 40) $grade = "E";
else $grade = "F";

$stmt = $conn->prepare("INSERT INTO results (student_id, course_id, score, grade) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iids", $student_id, $course_id, $score, $grade);

if ($stmt->execute()) {
$success = "Result uploaded successfully!";
} else {
$error = "Something went wrong or result already exists.";
}
}

require_once "results_view.php";
?>