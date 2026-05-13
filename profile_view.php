
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Profile</title>
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="profile.css">
</head>
<body>

<nav>
<h1>Student Portal</h1>
<div class="nav-links">
<a href="dashboard.php">Home</a>
<a href="profile.php">Profile</a>
<a href="results.php">Results</a>
<a href="announcements.php">Announcements</a>
<a href="logout.php">Logout</a>
</div>
</nav>

<div class="container">
<div class="profile-card">
<h2>My Profile</h2>

<?php if ($success): ?>
<p class="success"><?php echo $success; ?></p>
<?php endif; ?>

<?php if ($error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST" action="profile.php">

<div class="form-group">
<label>Full Name</label>
<input type="text" name="full_name" value="<?php echo $student['full_name']; ?>" required>
</div>

<div class="form-group">
<label>Matric Number</label>
<input type="text" value="<?php echo $student['matric_number']; ?>" disabled>
<small>Matric number cannot be changed</small>
</div>

<div class="form-group">
<label>Department</label>
<input type="text" name="department" value="<?php echo $student['department']; ?>" required>
</div>

<div class="form-group">
<label>Level</label>
<select name="level" required>
<option value="100" <?php echo $student['level'] == 100 ? 'selected' : ''; ?>>100</option>
<option value="200" <?php echo $student['level'] == 200 ? 'selected' : ''; ?>>200</option>
<option value="300" <?php echo $student['level'] == 300 ? 'selected' : ''; ?>>300</option>
<option value="400" <?php echo $student['level'] == 400 ? 'selected' : ''; ?>>400</option>
<option value="500" <?php echo $student['level'] == 500 ? 'selected' : ''; ?>>500</option>
</select>
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" value="<?php echo $student['email']; ?>" required>
</div>

<button type="submit" class="save-btn">Save Changes</button>

</form>
</div>
</div>

</body>
</html>