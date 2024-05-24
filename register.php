<?php
    require_once('db_connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (username, password, email ) VALUES ('$username', '$password', '$email')";
        if (mysqli_query($conn, $sql)) {
            header("Location:login.html");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
