
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <nav>
        <h1>Student Portal</h1>
        <div class="nav-links">
            <a href="dashboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="results.php">Results</a>
            <a href="announcement.php">Announcements</a>
            <a href="logout.php">Logout</a>
        </div>    
    </nav>

    <div class="container">
        <!-- Welcome card -->
        <div class="welcome-card">
            <h2>Welcome, <?php echo $student["full_name"]; ?> </h2>
            <p>Matric Number: <strong><?php echo $student["matric_number"]; ?><strong></p>
            <p>Department: <strong><?php echo $student["department"]; ?><strong></p>
            <p>Level: <strong><?php echo $student["level"]; ?><strong></p>
        </div>

        <!-- Quick Links -->
        <div class="quick-links"> 
            <a href="profile.php" class="card">
                <h3>My Profile</h3>
                <p>View and edit your details</p>
            </a>
            <a href="results.php" class="card">
                <h3>My Results</h3>
                <p>Check your grades</p>
            </a>
            <a href="announcements.php" class="card">
                <h3>Announcements</h3>
                <p>Latest news from school</p>
            </a>
        </div>

        <!-- Recent Announcements -->
        <div class="announcements">
            <h3>Recent Announcements</h3>
            <?php if ($ann->num_rows > 0): ?>
                <?php while ($row = $ann->fetch_assoc()): ?>
                    <div class="announcement-item">
                        <h4><?= $row["title"]; ?></h4>
                        <p><?= $row["body"]; ?></p>
                        <small><?= $row["created_at"]; ?></small>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>No Announcements yet.</p>
                        <?php endif; ?>
        </div> 
    </div>               
</body>
</html>