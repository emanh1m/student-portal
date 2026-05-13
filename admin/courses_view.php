<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Courses</title>
<link rel="stylesheet" href="../dashboard.css">
<link rel="stylesheet" href="../results.css">

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
<h2>Add Course</h2>

<?php if ($success): ?>
<p class="success"><?php echo $success; ?></p>
<?php endif; ?>
<?php if ($error): ?>
<p class="error"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST" action="courses.php">
<div class="form-group">
<label>Course Code</label>
<input type="text" name="course_code" placeholder="e.g. CSC101" required>
</div>
<div class="form-group">
<label>Course Name</label>
<input type="text" name="course_name" placeholder="e.g. Introduction to Computing" required>
</div>
<div class="form-group">
<label>Units</label>
<select name="unit" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
<button type="submit" name="signup">Add Course</button>
</form>
</div>

<div class="results-card" style="margin-top:25px;">
<h2>All Courses</h2>
<?php if ($courses->num_rows > 0): ?>
<table>
<thead>
<tr>
<th>Course Code</th>
<th>Course Name</th>
<th>Units</th>
</tr>
</thead>
<tbody>
<?php while ($row = $courses->fetch_assoc()): ?>
<tr>
<td><?php echo $row["course_code"]; ?></td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["unit"]; ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
<?php else: ?>
<p class="no-data">No courses added yet.</p>
<?php endif; ?>
</div>
</div>

</body>
</html>