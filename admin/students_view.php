
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Students</title>
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
<div class="results-card">
<h2>All Students</h2>

<?php if ($result->num_rows > 0): ?>
<table>
<thead>
<tr>
<th>Full Name</th>
<th>Matric Number</th>
<th>Department</th>
<th>Level</th>
<th>Email</th>
<th>Joined</th>
</tr>
</thead>
<tbody>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?php echo $row["full_name"]; ?></td>
<td><?php echo $row["matric_number"]; ?></td>
<td><?php echo $row["department"]; ?></td>
<td><?php echo $row["level"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["created_at"]; ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
<?php else: ?>
<p class="no-data">No students registered yet.</p>
<?php endif; ?>
</div>
</div>

</body>
</html>