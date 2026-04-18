<?php if (!isset($error)) $error=""; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="login-box">
    <?php if(!empty($error)): ?>
    <p style="color:red"; text-align:center; margin-bottom:10px;">
       <?php echo $error; ?>
    </p>
    <?php endif; ?>
        <form method="POST" action="login.php">
            <h2>Login</h2>
            <label>Username:</label>
            <input type="text" name="username" placeholder="username" required>
            
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter your password" required>

            <a href="forgotpass.php">               
                <p class="forgot">Forgot Password?</p>
            </a>

            <button class="login" name="login">Log In</button>

            <p class="signup-text">Don't have an account? </p>
        </form>
        <a href="signup.php">
                <button class="signup" name="signup">Sign Up</button>
        </a>
    </div>
</body>
</html>