<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Results</title>
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="results.css">
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
<div class="results-card">
<h2>My Results</h2>

<?php if ($results->num_rows > 0): ?>
<table>
<thead>
<tr>
<th>Course Code</th>
<th>Course Name</th>
<th>Units</th>
<th>Score</th>
<th>Grade</th>
</tr>
</thead>
<tbody>
<?php while ($row = $results->fetch_assoc()): ?>
<tr>
<td><?php echo $row["course_code"]; ?></td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["unit"]; ?></td>
<td><?php echo $row["score"]; ?></td>
<td class="grade"><?php echo $row["grade"]; ?></td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
<?php else: ?>
<p class="no-data">No results uploaded yet.</p>
<?php endif; ?>
</div>
</div>

</body>
</html>