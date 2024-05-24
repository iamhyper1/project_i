<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent Successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('images/wallpaperflare.com_wallpaper.jpg'); /* Specify the path to your background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the background image */
            color: white; /* Set font color to white */
        }
        
        .container {
            text-align: center;
        }
        
        .success-message {
            font-size: 24px;
            margin-bottom: 20px;
            opacity: 0;
            animation: slideIn 1s forwards;
        }
        
        .animated-emoji {
            font-size: 48px;
            opacity: 0;
            animation: fadeIn 2s 1s forwards;
        }

        .logo {
            display: block;
            margin: 0 auto; /* This will center the image horizontally */
            max-width: 300px; /* Adjust the size of the logo as needed */
            height: auto;
            background-color: transparent; /* Remove background color */
        }
        
        @keyframes slideIn {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-message">Message sent successfully! <br>Thank you for contacting us, we will get back to you soon.<br>Best regards,<br> TRAVEL NEPAL</div>
        <img class="logo" src="images/NEPAL.png" alt="Hyper Travel Logo">
    </div>
</body>
</html>
