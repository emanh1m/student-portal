<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
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
<h2 class="admin-title">Welcome, Admin</h2>

<div class="stats">
<div class="stat-card">
<h3><?php echo $student_count; ?></h3>
<p>Total Students</p>
</div>
<div class="stat-card">
<h3><?php echo $course_count; ?></h3>
<p>Total Courses</p>
</div>
<div class="stat-card">
<h3><?php echo $ann_count; ?></h3>
<p>Announcements</p>
</div>
</div>

<div class="quick-links">
<a href="students.php" class="card">
<h3>Manage Students</h3>
<p>View all registered students</p>
</a>
<a href="results.php" class="card">
<h3>Upload Results</h3>
<p>Enter student grades</p>
</a>
<a href="courses.php" class="card">
<h3>Manage Courses</h3>
<p>Add or remove courses</p>
</a>
<a href="announcements.php" class="card">
<h3>Announcements</h3>
<p>Post notices to students</p>
</a>
</div>
</div>

</body>
</html>