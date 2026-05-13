<?php
session_start();
require_once "auth_guard.php";
require_once "config.php";

$success = "";
$error = "";

// Fetch current student profile
$stmt = $conn->prepare("SELECT s.full_name, s.matric_number, s.department, s.level, u.email
FROM students s
JOIN users u ON s.user_id = u.id
WHERE s.user_id = ?");
$stmt->bind_param("i", $_SESSION["user_id"]);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$full_name = trim($_POST["full_name"]);
$department = trim($_POST["department"]);
$level = $_POST["level"];
$email = trim($_POST["email"]);

// Update students table
$stmt2 = $conn->prepare("UPDATE students SET full_name = ?, department = ?, level = ? WHERE user_id = ?");
$stmt2->bind_param("ssii", $full_name, $department, $level, $_SESSION["user_id"]);

// Update users table
$stmt3 = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
$stmt3->bind_param("si", $email, $_SESSION["user_id"]);

if ($stmt2->execute() && $stmt3->execute()) {
$success = "Profile updated successfully!";
// Refresh student data
$student["full_name"] = $full_name;
$student["department"] = $department;
$student["level"] = $level;
$student["email"] = $email;
} else {
$error = "Something went wrong. Try again.";
}
}

require_once "profile_view.php";
?>