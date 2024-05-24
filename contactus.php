
<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .menu {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .menu i {
            margin-right: 5px;
        }

        .menu a {
            text-decoration: none;
            color: #333;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .contact-form label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .contact-form input[type=text],
        .contact-form textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 16px;
            resize: vertical;
            width: 100%;
        }

        .contact-form button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            align-self: flex-end;
            width: 120px;
        }

        .contact-form button:hover {
            background-color: #45a049;
        }

        .go-back-btn {
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
        }

        /* Video background */
        #video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }   
    </style>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-d84SSkqdVg2J0EJ27FvUU3qJSpGTL7p1riK/PEb46WfJkh1/4yPkNNCNygdxq4fjkBSGWmnxktQ+UI0bqBbS7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Background video -->
    <video autoplay muted loop id="video-background" onclick="toggleFullScreen()">
        <source src="images/NEPAL _ Travel Film.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Form container -->
    <div class="container">
        <!-- Login/Logout -->
        <div class="menu">
            <!-- Your PHP code for login/logout -->
        </div>
        
        <h2>Contact Us</h2>
        <form class="contact-form" method="post" action="submit_contact.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>
            
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." required></textarea>
            
            <button type="submit">Submit</button>
        </form>

        <!-- Go Back to Website Button with Exit Icon -->
        <button class="go-back-btn" onclick="goBack()"><i class="fas fa-times"></i> Go Back to Website</button>
    </div>

    <!-- JavaScript to redirect to index.php and toggle fullscreen -->
    <script>
        function goBack() {
            window.location.href = "index.php";
        }

        function toggleFullScreen() {
            var video = document.getElementById("video-background");
            if (!document.fullscreenElement) {
                video.requestFullscreen().catch(err => {
                    console.log(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
                });
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        }
    </script>
</body>
</html>
