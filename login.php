<?php
    session_start();
    require_once('db_connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare a SQL statement with placeholders
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        
        // Prepare the SQL statement
        $stmt = mysqli_prepare($conn, $sql);
        
        // Bind parameters to the placeholders
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        
        // Execute the prepared statement
        mysqli_stmt_execute($stmt);
        
        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit(); // Make sure to exit after redirecting
        } else {
            // Display invalid username or password message
            echo '<div style="border: 2px solid red; background-color: #ffe6e6; padding: 10px; text-align: center; margin: 20px auto; width: 300px;">';
            echo '<img src="images/cross.jpg" alt="Cross Logo" style="width: 20px; height: 20px; vertical-align: middle; margin-right: 5px;">';
            echo '<span style="color: red; font-weight: bold;">Invalid username or password.</span>';
            echo '</div>';
        }
        
        // Close the statement
        mysqli_stmt_close($stmt);
    }
?>
