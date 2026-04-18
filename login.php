
<?php
session_start();
require_once "config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$username = trim($_POST["username"]);
$password = $_POST["password"];

// Find user by username
$stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
// User found, now verify password
if (password_verify($password, $row["password"])) {
// Password correct, create session
$_SESSION["user_id"] = $row["id"];
$_SESSION["username"] = $username;
$_SESSION["role"] = $row["role"];
$_SESSION["last_activity"] = time();

// Redirect based on role
if ($row["role"] === "admin") {
header("Location: admin/dashboard.php");
} else {
header("Location: dashboard.php");
}
exit();
} else {
$error = "Invalid username or password.";
}
} else {
$error = "Invalid username or password.";
}
}

require_once "loginform.php";
?>