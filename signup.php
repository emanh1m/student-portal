
<?php
session_start();
require_once 'config.php';

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"]  === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $fullname = trim($_POST['full_name']);
    $matric = trim($_POST['matric_number']);
    $dept = trim($_POST['department']);
    $level = $_POST['level'];

    if ($password = $confirm) {
        $check = $conn->prepare("SELECT id FROM  users WHERE username = ? OR email = ?");
        $check->bind_param("ss", $username, $email);
        $check->execute();
        $check->store_result();
       

        if ($check->num_rows > 0) {
           $error = "Username or email already taken.";
        } else {
            $hashed = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed);

            if ($stmt->execute()) {
                $user_id = $conn->insert_id;
            
                $stmt2 = $conn->prepare("INSERT INTO students (user_id, full_name, matric_number, department, level) VALUES(?, ?, ?, ?, ?)");
                $stmt2->bind_param("isssi", $user_id, $fullname, $matric, $dept, $level);

                if ($stmt2->execute()) {
                    $success = "Account created successfully.";
                } else {
                    $error = "Something went wrong saving your profile.";
                }
            } else {
                $error = "Something went wrong creating your profile.";
            }
        }
    } else {
        $error = "Passwords do not match.";}

}

require_once 'signform.php';
?>

