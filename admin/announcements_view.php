<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Announcements</title>
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
<h2>Post Announcement</h2>

<?php if ($success): ?>
<p class="success" style="color:green"><?php echo $success; ?></p>
<?php endif; ?>
<?php if ($error): ?>
<p class="error" style="color:red"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST" action="announcements.php">
<div class="form-group">
<label>Title</label>
<input type="text" name="title" placeholder="Announcement title" required>
</div>
<div class="form-group">
<label>Message</label>
<textarea name="body" rows="5" placeholder="Write your announcement here..." required style="padding:11px; border:1px solid #ddd; border-radius:8px; font-size:14px; width:100%; outline:none;"></textarea>
</div>
<button type="submit" name="signup">Post Announcement</button>
</form>
</div>

<div class="results-card" >
<h2>All Announcements</h2>
<?php if ($announcements->num_rows > 0): ?>
<?php while ($row = $announcements->fetch_assoc()): ?>
<div class="announcement-item">
<h4><?php echo $row["title"]; ?></h4>
<p><?php echo $row["body"]; ?></p>
<small><?php echo $row["created_at"]; ?></small> 
<form method="POST" action="announcements.php">
    <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
    <button type="submit" name="delete" class="delete">Delete</button>
</form>
</div>
<?php endwhile; ?>
<?php else: ?>
<p class="no-data">No announcements yet.</p>
<?php endif; ?>
</div>
</div>

</body>
</html>