<?php
session_start();
require_once "../admin_guard.php";
require_once "../config.php";

$result = $conn->query("SELECT s.full_name, s.matric_number, s.department, s.level, u.email, u.created_at FROM students s JOIN users u ON s.user_id = u.id ORDER BY s.full_name ASC");

require_once "students_view.php";
?>