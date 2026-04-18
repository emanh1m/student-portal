<?php
session_start();
require_once 'auth_guard.php';
require_once 'config.php';

$stmt = $conn->prepare("SELECT s.full_name, s.matric_number, s.department, s.level FROM students s WHERE s.user_id=?");
$stmt->bind_param("i", $_SESSION["user_id"]);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

$ann = $conn->query("SELECT title, body, created_at FROM announcements ORDER BY created_at DESC LIMIT 3");

require_once "dashboard_view.php";
?>



