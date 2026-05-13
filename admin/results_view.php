
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Results</title>
<link rel="stylesheet" href="../dashboard.css">

<link rel="stylesheet" href="admin.css">
</head>
<body>

<nav>
<h1>Admin Panel</h1>
<div class="nav-links">
<a href="dashboard.php">Home</a>
<a href="students.php">Students</a>
<a href="results.php">Results</a>
<a href="courses.php">Courses</a>
<a href="announcements.php">Announcements</a>
<a href="../logout.php">Logout</a>
</div>
</nav>

<div class="container">
<div class="signup-box">
<h2>Upload Result</h2>

<?php if ($success): ?>
<p class="success"><?php echo $success; ?></p>
<?php endif; ?>
<?php if ($error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST" action="results.php">
<div class="form-group">
<label>Select Student</label>
<select name="student_id" required>
<option value="">-- Select Student --</option>
<?php while ($row = $students->fetch_assoc()): ?>
<option value="<?php echo $row["id"]; ?>">
<?php echo $row["full_name"] . " (" . $row["matric_number"] . ")"; ?>
</option>
<?php endwhile; ?>
</select>
</div>

<div class="form-group">
<label>Select Course</label>
<select name="course_id" required>
<option value="">-- Select Course --</option>
<?php while ($row = $courses->fetch_assoc()): ?>
<option value="<?php echo $row["id"]; ?>">
<?php echo $row["course_code"] . " - " . $row["course_name"]; ?>
</option>
<?php endwhile; ?>
</select>
</div>

<div class="form-group">
<label>Score (0 - 100)</label>
<input type="number" name="score" min="0" max="100" placeholder="Enter score" required>
</div>

<button type="submit" name="signup">Upload Result</button>
</form>
</div>
</div>

</body>
</html>