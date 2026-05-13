<?php
session_start();
require_once "admin_guard.php";
require_once "../config.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$course_code = trim($_POST["course_code"]);
$course_name = trim($_POST["course_name"]);
$unit = $_POST["unit"];

$stmt = $conn->prepare("INSERT INTO courses (course_code, course_name, unit) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $course_code, $course_name, $unit);

if ($stmt->execute()) {
$success = "Course added successfully!";
} else {
$error = "Course code already exists or something went wrong.";
}
}

$courses = $conn->query("SELECT * FROM courses ORDER BY course_code ASC");

require_once "courses_view.php";
?>