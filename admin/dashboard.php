<?php
session_start();
require_once "admin_guard.php";
require_once "../config.php";

// Count students
$students = $conn->query("SELECT COUNT(*) as total FROM students");
$student_count = $students->fetch_assoc()["total"];

// Count courses
$courses = $conn->query("SELECT COUNT(*) as total FROM courses");
$course_count = $courses->fetch_assoc()["total"];

// Count announcements
$announcements = $conn->query("SELECT COUNT(*) as total FROM announcements");
$ann_count = $announcements->fetch_assoc()["total"];

require_once "dashboard_view.php";
?>