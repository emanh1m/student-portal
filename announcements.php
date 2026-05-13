<?php
session_start();
require_once "auth_guard.php";
require_once "config.php";

$result = $conn->query("SELECT title, body, created_at FROM announcements ORDER BY created_at DESC");

require_once "announcements_view.php";
?>