
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Announcements</title>
<link rel="stylesheet" href="dashboard.css">
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
<div class="announcements">
<h2>Announcements</h2>

<?php if ($result->num_rows > 0): ?>
<?php while ($row = $result->fetch_assoc()): ?>
<div class="announcement-item">
<h4><?php echo $row["title"]; ?></h4>
<p><?php echo $row["body"]; ?></p>
<small><?php echo $row["created_at"]; ?></small>
</div>
<?php endwhile; ?>
<?php else: ?>
<p class="no-data">No announcements yet.</p>
<?php endif; ?>
</div>
</div>

</body>
</html>