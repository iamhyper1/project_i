<?php
    session_start();

    // Check if the user is logged in, if not, redirect to login page
    if(!isset($_SESSION['username'])){
        header("Location: login.html");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is your dashboard. You are logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
