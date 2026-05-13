

<?php
if (!isset($error)) $error = "";
if (!isset($success)) $success = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="signup-box">
<h2>Create Account</h2>

<?php if ($error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<?php if ($success): ?>
<p class="success"><?php echo $success; ?></p>
<?php endif; ?>

<form method="POST" action="signup.php">
<div class="form-group">
<label>Full Name</label>
<input type="text" name="full_name" placeholder="Full name" required>
</div>

<div class="form-group">
<label>Matric Number</label>
<input type="text" name="matric_number" placeholder="Matric Number" required>
</div>

<div class="form-group">
<label>Department</label>
<input type="text" name="department" placeholder="Department" required>
</div>

<div class="form-group">
<label>Level</label>
<select name="level" required>
<option value="">Select Level</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
</select>
</div>

<div class="form-group">
<label>Username</label>
<input type="text" name="username" placeholder="Username" required>
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" placeholder="Email" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" placeholder="Password" required>
</div>

<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="confirm_password" placeholder="Confirm Password" required>
</div>

<button type="submit" name="signup">Sign Up</button>
</form>
</div>
</body>
</html>