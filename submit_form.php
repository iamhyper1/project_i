<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\PHPMailer\src\SMTP.php';

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "nepal";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $firstname = sanitize_input($_POST["firstname"]);
    $lastname = sanitize_input($_POST["lastname"]);
    $email = sanitize_input($_POST["email"]);
    $phone = sanitize_input($_POST["phone"]);
    $person = sanitize_input($_POST["person"]);
    $from_date = sanitize_input($_POST["from_date"]);
    $to_date = sanitize_input($_POST["to_date"]);
    $country = sanitize_input($_POST["country"]);
    $subject = sanitize_input($_POST["subject"]);
    $booking_id = 'C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\images\QR.jpg'; // Assuming the QR image is stored in the 'images' directory

    // Calculate total amount based on the selected package and number of days
    $package_price_per_person_per_day = 0; // Initialize the package price per person per day

    // Determine package price per person per day based on the selected destination
    switch ($country) {
        case "Pasupatinath":
            $package_price_per_person_per_day = 10000; // RS.10,000 for Pasupatinath
            break;
        case "Swayambhunath":
        case "Mustang":
        case "Patan Durbar":
            $package_price_per_person_per_day = 10000; // RS.10,000 for these destinations
            break;
        case "Lumbini":
        case "Pokhara":
        case "Kulekhani Dam":
            $package_price_per_person_per_day = 25000; // RS.25,000 for these destinations
            break;
        default:
            echo "Invalid destination!";
            break;
    }

    // Calculate total days
    $total_days = (strtotime($to_date) - strtotime($from_date)) / (60 * 60 * 24); 

    // Calculate total amount
    $total_amount = $package_price_per_person_per_day * $person * $total_days; 

    // Insert data into the database
    $sql = "INSERT INTO web (firstname, lastname, email, phone, person , from_date, to_date, country, subject) VALUES ('$firstname', '$lastname', '$email', '$phone', '$person' , '$from_date', '$to_date', '$country', '$subject')";
    if ($conn->query($sql) === TRUE) {
        // Email confirmation to user
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hyperprabhat@gmail.com';
            $mail->Password = 'kdkm ezun favl ztjo';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('your_email@example.com', 'Travel Nepal');
            $mail->addAddress($email, $firstname . ' ' . $lastname);

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Booking Confirmation and Bill';
            $mail->Body = "
            <html>
            <head>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-image: url('images/wallpaperflare.com_wallpaper.jpg');
                        background-size: cover;
                        background-position: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        margin: 0;
                    }
                    .container {
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                        text-align: center;
                        max-width: 600px;
                        margin: auto;
                        position: relative;
                    }
                    .bill-footer {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        width: 100%;
                        text-align: right;
                    }
                    .signature {
                        font-weight: bold;
                        text-decoration: underline;
                        margin-top: 5px;
                    }
                    .signature-label {
                        margin-top: 5px;
                    }
                    .bill-table {
                        border-collapse: collapse;
                        width: 100%;
                        margin-bottom: 20px;
                    }
                    .bill-table th, .bill-table td {
                        padding: 8px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                    }
                    .bill-table th {
                        background-color: #f2f2f2;
                    }
                    .thank-you {
                        font-size: 18px;
                        color: #333;
                        margin-bottom: 20px;
                    }
                    .button {
                        text-decoration: none;
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px 20px;
                        border-radius: 5px;
                        display: inline-block;
                        margin-top: 20px;
                    }
                    .contact-info {
                        margin-top: 30px;
                        text-align: left;
                    }
                    .contact-info p {
                        margin: 5px 0;
                    }
                    hr {
                        border: 0;
                        height: 1px;
                        background: #ccc;
                        margin: 30px 0;
                    }
                </style>
            </head>
            <body>
                <div class='container'>
                    <p style='font-size: 16px; color: #333;'>PAN Number: XXXXXXXXXX</p>
                    <p style='font-weight: bold; margin-bottom: 5px;'>Travel Nepal</p>
                    <hr>
                    <p>Dear $firstname $lastname,</p>
                    <p>Thank you for your booking. Here are your booking details:</p>
                    <table class='bill-table'>
                        <tr>
                            <th>From Date</th>
                            <td>$from_date</td>
                        </tr>
                        <tr>
                            <th>To Date</th>
                            <td>$to_date</td>
                        </tr>
                        <tr>
                            <th>Number of Persons</th>
                            <td>$person</td>
                        </tr>
                        <tr>
                        <th>Phone Number:</th>
                        <td>$phone</td>
                    </tr>
                        <tr>
                            <th>Package You Selected</th>
                            <td>$country</td>
                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <td>RS. $total_amount</td>
                        </tr>
                        <tr>
                            <th>Discount Amount</th>
                            <td>RS.0</td>
                        </tr>
                        <tr>
                            <th>Grand Total </th>
                            <td>RS. $total_amount /-</td>
                        </tr>
                        <tr>
                            <th>Bill Generated Date</th>
                            <td>" . date('Y-m-d H:i:s') . "</td>
                        </tr>
                    </table>
                    <p>Please find the QR Code image attached for payment.</p>
                    <p>Please scan the QR Code and proceed with the payment. Once done, kindly send us the screenshot of the payment confirmation. Your booking will be considered successful upon receipt of the payment screenshot.</p>
                    <p>We will get back to you soon.</p>
                    <p class='thank-you'>
                    Thank you for choosing Travel Nepal!</p>
                    <p><b>ट्राभल नेपाल रोज्नु भएकोमा धन्यवाद!</b></p>
                    <div class='contact-info'>
                        <p><strong>Contact us:</strong> hyperprabhat@gmail.com</p>
                        <p><strong>Phone:</strong> +977-9819853254</p>
                        <p><strong>Address:</strong> Kathmandu, Nepal</p>
                    </div>
                    <div class='bill-footer'>
                        <div class='signature'><b><i>Prabhat</i></b></div>
                        <div class='signature-label'>Signature</div>
                    </div>
                </div>
            </body>
            </html>
        ";

            $mail->addAttachment('C:\xampp\htdocs\HYPER TRVEL - Copy\Travel-html\images\QR.jpg', 'QR_Code.jpg');

            $mail->send();

            // Notify admin about the booking
            $admin_email = 'hyperprabhat@gmail.com'; // Replace with the admin's email address

            // Create a new PHPMailer instance
            $admin_mail = new PHPMailer(true);

            // Server settings
            $admin_mail->isSMTP();
            $admin_mail->Host = 'smtp.gmail.com';
            $admin_mail->SMTPAuth = true;
            $admin_mail->Username = 'hyperprabhat@gmail.com'; // Your Gmail username
            $admin_mail->Password = 'kdkm ezun favl ztjo'; // Your Gmail password
            $admin_mail->SMTPSecure = 'tls';
            $admin_mail->Port = 587;

            //Recipients
            $admin_mail->setFrom('hyperprabhat@gmail.com', 'Travel Nepal');
            $admin_mail->addAddress($admin_email);

            //Content
            $admin_mail->isHTML(true);
            $admin_mail->Subject = 'New Booking Details';
            $admin_mail->Body = "
                <html>
                <head>
                    <!-- Styles -->
                </head>
                <body>
              <h2>Submitted Form Data</h2>
<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>$firstname $lastname</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>  $email</td>
    </tr>
    <tr>
        <td><strong>Phone Number: </strong></td>
        <td>$phone</td>
    </tr>
    <tr>
        <td><strong>Number of Persons:</strong></td>
        <td> $person</td>
    </tr>
    <tr>
        <td><strong>From Date:</strong></td>
        <td> $from_date</td>
    </tr>
    <tr>
        <td><strong>To Date:</strong></td>
        <td> $to_date</td>
    </tr>
    <tr>
        <td><strong>Destination:</strong></td>
        <td> $country</td>
    </tr>
    <tr>
        <td><strong>Total Amount:</strong></td>
        <td> $total_amount</td>
    </tr>
</table>
                </body>
                </html>
            ";

            // Send the email to admin
            $admin_mail->send();

            // Display success message to user
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Booking Successful</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Include Font Awesome CSS -->
            </head>
            <body style="font-family: Arial, sans-serif; background-image: url(\'images/wallpaperflare.com_wallpaper.jpg\'); background-size: cover; background-position: center; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
                <div style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); text-align: center;">
                    <p style="font-size: 24px; color: #4CAF50;">Booking successful.</p>
                    <p style="font-size: 18px; color: #333;">Confirmation email has been sent.</p>
                </div>
            </body>
            </html>';

        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
