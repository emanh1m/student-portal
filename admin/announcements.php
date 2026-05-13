<?php
session_start();
require_once "admin_guard.php";
require_once "../config.php";

$error = "";
$success = "";

if (isset($_POST["delete"]))  {
    $delete_id = $_POST["delete_id"];
    $stmt = $conn->prepare("DELETE FROM announcements WHERE id=?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();

    if($stmt->execute()) {
        $success="Announcement deleted successfully!";
    }else {
        $error="Something went wrong.";
    }

}else if(isset($_POST["signup"])) {

$title = trim($_POST["title"]);
$body = trim($_POST["body"]);

$stmt = $conn->prepare("INSERT INTO announcements (title, body) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $body);

if ($stmt->execute()) {
$success = "Announcement posted successfully!";
} else {
$error = "Something went wrong.";
}
}

$announcements = $conn->query("SELECT * FROM announcements ORDER BY created_at DESC");

require_once "announcements_view.php";
?>