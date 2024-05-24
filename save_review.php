<?php
// Database connection parameters
$host = 'localhost'; // Change this to your database host
$username = 'root'; // Change this to your database username
$password = ''; // Change this to your database password
$database = 'star'; // Change this to your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if review text and username are set and not empty
    if (isset($_POST["userName"], $_POST["reviewText"], $_POST["starRating"]) && !empty($_POST["userName"]) && !empty($_POST["reviewText"]) && !empty($_POST["starRating"])) {
        // Get the review data from the POST request
        $userName = $_POST["userName"];
        $reviewText = $_POST["reviewText"];
        $starRating = $_POST["starRating"];

        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO reviews (user_name, review_text, star_rating) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $userName, $reviewText, $starRating);

        // Execute SQL statement
        if ($stmt->execute()) {
            // Close statement and connection
            $stmt->close();
            $conn->close();
            // Return success response
            http_response_code(200);
        } else {
            // Close statement and connection
            $stmt->close();
            $conn->close();
            // Return error response
            http_response_code(500);
            echo "Error saving review to database";
        }
    } else {
        // If review text or username is not set or empty, return a bad request response
        http_response_code(400);
        echo "Username, review text, and star rating are required";
    }
} else {
    // If request method is not POST, return a method not allowed response
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
