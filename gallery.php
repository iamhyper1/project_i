<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Website</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link type="image" rel="icon" href="images/holyday-bg.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,500i,600,600i" rel="stylesheet">
</head>

<body>

    <div id="arrow">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par">
                    <a href="index.php">
                        <h2>Travel Nepal</h2>
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a class="menu_hover" href="index.php">Home</a></li>
                        <li><a class="menu_hover" href="travel.php">Tarvel</a></li>
                        <li><a class="menu_hover" href="booknow.php">Book Now</a></li>
                        <li><a class="menu_hover" href="gallery.php">Gallery</a></li>
                        <li><a class="menu_hover" href="holiday.php">Holiday</a></li>
                        <li><a class="menu_hover" href="blog.php">Blog</a></li>
                        <li><a class="menu_hover" href="contactus.php">Contact Us</a></li>
                      

<li>
<?php
session_start(); // Start the session

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    // If logged in, display the username and logout link
    echo '<div class="user-info">';
    echo '<i class="fas fa-user"></i> <span class="username" style="color: black; font-weight: bold;">Hello <span class="username-highlight" style="color: red; font-weight: bold;">' . $_SESSION['username'] . '</span></span>';
    echo '<a class="menu_hover logout" href="logout.php" style="color: black; text-decoration: none;"><i class="fas fa-sign-out-alt"></i> Logout</a>';
    echo '</div>';

    // Check if the login successful message has not been shown before
    if(!isset($_SESSION['login_success_message_shown'])) {
        // Display login successful message with animation from the right and thick mark
        echo '<div id="login-success-message-container" style="position: fixed; top: 10px; right: -300px; transition: right 1s ease-in-out;">';
        echo '<div id="login-success-message" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px;">';
        echo 'Login Successful <span style="font-weight: bold;">&#10004;</span>';
        echo '</div>';
        echo '</div>';

        // Mark the message as shown
        $_SESSION['login_success_message_shown'] = true;
    }

    // JavaScript for sliding in the message from the right and fading it out after 4 seconds
    echo '<script>';
    echo 'setTimeout(function() {';
    echo 'document.getElementById("login-success-message-container").style.right = "10px";'; // Slide in from the right
    echo 'setTimeout(function() {';
    echo 'document.getElementById("login-success-message").style.opacity = "0";'; // Fade out
    echo 'setTimeout(function() { document.getElementById("login-success-message-container").remove(); }, 1000);'; // Remove the message container after fadeout animation
    echo '}, 3000);'; // Wait for 3 seconds before fading out
    echo '}, 100);'; // Delay for 0.1 second before sliding in
    echo '</script>';
} else {
    // If not logged in, display the login link
    echo '<i class="fas fa-sign-in-alt"></i> <a class="menu_hover" href="login.html" style="color: red; text-decoration: none;">Login</a>';
}
?>





                
            </li>
        </ul>
        

                    </ul>
                </div>
                <div class="toggle-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="conatiner">
            <div class="home_header_info">
                <h1 class="typewrite" data-period="2000" data-type='[ "Happiness is closer than you think", "Adventure awaits, go find it.", "Don’t be a tourist, be a traveler." ]'></h1>
                <p>A lot of people around the world travel every year to many places. Moreover, it is important to travel to humans. Some travel to learn more while some travel to take a break from their life. No matter the reason, travelling opens a big door for us to explore the world beyond our imagination and indulge in many things.</p>
                <a href="readmore.php">Read More</a>
            </div>
        </div>
        <div class="video">
            <video id="video" autoplay loop muted>
                <source type="video/mp4" src="images/Your MIND will Relax After Watching _ THIS (4K) NEPAL CINEMATIC SHORT FILM.mp4" />
            </video>
        </div>
    </header>


    

    <section id="gallery">
        <div class="container">
            
            <div class="row">
                <div align="center">
                    <button class="btn filter-button active" data-filter="all">All</button>
                    <button class="btn filter-button" data-filter="hdpe">Diving</button>
                    <button class="btn filter-button" data-filter="sprinkle">Nature</button>
                    <button class="btn filter-button" data-filter="spray">Temple</button>
                </div>

                <div class="filter-gal-par">
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise//Bunjy-Nepal-6.jpg" class="img-responsive">
                        <a href="readmore.php">Read More</a>
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images//fiji-surprise/Nature_Nepal.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/maxresdefault.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="imageS/fiji-surprise/780-Rhino-photo-for-envt-day.webp" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/recipe_slides/1200px-Swayambhunath_2018.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/why-travel-to-nepal-nature-and-spiritual-tour.jpeg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/shradha-silwal-2-375x195.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/fiji-surprise/181003_XFLO0081_Boudhanath-Stupa_1200x.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                        <img src="images/fiji-surprise/FILE-1602006525-20200723194334.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                        <img src="images/fiji-surprise/photo-1533130061792-64b345e4a833.jpg" class="img-responsive">
                    </div>

                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                        <img src="images/fiji-surprise/manakamana-temple.jpg" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    h3 {
        text-align: center;
        margin-top: 20px;
        font-size: 30px;
    }
    footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 20px;
    }
    .package-box {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        width: calc(50% - 40px); /* Adjust to display two boxes per row */
        max-width: 300px; /* Limit maximum width */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        position: relative;
    }
    .package-box:hover {
        transform: translateY(-5px);
    }
    .package-box img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }
    .package-box h4 {
        margin-top: 10px;
        color: white;
    }
    .package-box p {
        margin: 5px 0;
        color: white;
    }
    .book-now-btn {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: block; /* Change to block level */
        font-size: 16px;
        border-radius: 5px;
        position: absolute;
        bottom: 10px;
        left: 60%;
        transform: translateX(-50%);
        transition: background-color 0.3s ease;
    }
    .book-now-btn:hover {
        background-color: #45a049;
    }

    /* Responsive styles */
    @media only screen and (max-width: 600px) {
        .package-box {
            width: calc(100% - 40px); /* Adjust to display one box per row */
        }
    }
</style>
</head>
<body>
<h3>PRICE OF PER PERSON ACCORDING TO DESTINATION</h3>
<footer>
    <div class="package-box">
        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" alt="Pashupatinath">
        <h4><b>Pashupatinath</b></h4>
        <p><strong>Package:</strong> RS.10,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 2</p>

        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/2022110811118_6159ce54bd04f19f9135172adc6dc596abd0c761398827bb3437027690d6682c.jpg" alt="Lumbini">
        <h4>Lumbini</h4>
        <p><strong>Package:</strong> RS.25,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 4</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/about-swayambhunath_1552978452.jpg" alt="Pashupatinath">
        <h4>Swayambhunath</h4>
        <p><strong>Package:</strong> RS.10,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 2</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/fewa-lake.jpg" alt="Lumbini">
        <h4>Pokhara</h4>
        <p><strong>Package:</strong> RS.25,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 4</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/Mustang-Nepal-.jpg" alt="Pashupatinath">
        <h4>Mustang</h4>
        <p><strong>Package:</strong> RS.10,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 2</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/view-of-indrasarobar.jpg" alt="Lumbini">
        <h4>Kulekhani Dam</h4>
        <p><strong>Package:</strong> RS.25,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 4</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/temple-g2f93590bb_1920.jpg" alt="Pashupatinath">
        <h4>Patan Durbar </h4>
        <p><strong>Package:</strong> RS.10,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 2</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/2022110811118_6159ce54bd04f19f9135172adc6dc596abd0c761398827bb3437027690d6682c.jpg" alt="Lumbini">
        <h4>Lumbini</h4>
        <p><strong>Package:</strong> RS.25,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 4</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" alt="Pashupatinath">
        <h4>Pashupatinath</h4>
        <p><strong>Package:</strong> RS.10,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 2</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <div class="package-box">
        <img src="images/recipe_slides/2022110811118_6159ce54bd04f19f9135172adc6dc596abd0c761398827bb3437027690d6682c.jpg" alt="Lumbini">
        <h4>Lumbini</h4>
        <p><strong>Package:</strong> RS.25,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 4</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div>
    <!-- <div class="package-box">
        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" alt="Pashupatinath">
        <h4>Pashupatinath</h4>
        <p><strong>Package:</strong> RS.10,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 2</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div> -->
    <!-- <div class="package-box">
        <img src="images/recipe_slides/2022110811118_6159ce54bd04f19f9135172adc6dc596abd0c761398827bb3437027690d6682c.jpg" alt="Lumbini">
        <h4>Lumbini</h4>
        <p><strong>Package:</strong> RS.25,000</p>
        <p><strong>No. Of Person:</strong> 1</p>
        <p><strong>Includes:</strong> Hotel, Lunch, Breakfast, Dinner and Guide</p>
        <p><strong>Days:</strong> 4</p>
        <a href="booknow.php" class="book-now-btn">Book Now</a>
    </div> -->
</footer>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    footer {
        background-color: #333;
        /* color: #fff;
        padding: 20px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative; */
    } 

    .copyright {
        margin: 0;
        font-siz: 30px;
        animation: slideInLeft 1s ease forwards;
        
    }

    .social-icons {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .social-icons a {
        margin: 0 10px;
        transition: transform 0.3s ease;
    }

    .social-icons a:hover {
        transform: scale(1.2);
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @media only screen and (max-width: 768px) {
        footer {
            flex-direction: column;
            padding: 10px;
        }
        .social-icons {
            margin-top: 10px;
            justify-content: center;
        }
    }
</style>
</head>
</body>
<footer style="padding-top: 4rem; background-color:white; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;" class="container footer-row">
        <div style="margin-bottom: 2rem;" class="footer-item">
            <a href="index.php" class="site-brand">
                <h1 style="color: #6c5ce7; font-size: 36px; font-weight: bold; letter-spacing: 2px;">Travel<span style="color: #ff6b6b;">Nepal</span></h1>
            </a>
            <p style="color: #333; font-size: 16px; line-height: 1.6;">Your ultimate travel companion for unforgettable journeys.</p>
        </div>

        <!-- Social Links -->
        <div style="margin-bottom: 2rem;" class="footer-item">
            <h2 style="color: #6c5ce7; font-size: 24px; font-weight: bold;">Connect with Us</h2>
            <ul style="list-style: none; padding: 0;" class="social-links">
                <li style="display: inline-block; margin-right: 15px;">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-facebook-f" style="color: #6c5ce7; font-size: 24px;"></i></a>
                </li>
                <li style="display: inline-block; margin-right: 15px;">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-instagram" style="color: #6c5ce7; font-size: 24px;"></i></a>
                </li>
                <li style="display: inline-block; margin-right: 15px;">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-twitter" style="color: #6c5ce7; font-size: 24px;"></i></a>
                </li>
                <li style="display: inline-block; margin-right: 15px;">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-pinterest" style="color: #6c5ce7; font-size: 24px;"></i></a>
                </li>
                <li style="display: inline-block;">
                    <a href="#" style="text-decoration: none;"><i class="fab fa-google-plus" style="color: #6c5ce7; font-size: 24px;"></i></a>
                </li>
            </ul>
        </div>

        <!-- Popular Places -->
        <div style="margin-bottom: 2rem;" class="footer-item">
            <h2 style="color: #6c5ce7; font-size: 24px; font-weight: bold;">Popular Places</h2>
            <ul style="list-style: none; padding: 0; font-size: 18px;">
                <li><a href="#" style="text-decoration: none; color: #333;">Pokhara</a></li>
                <li><a href="#" style="text-decoration: none; color: #333;">Mustang</a></li>
                <li><a href="#" style="text-decoration: none; color: #333;">Annapurna Base Camp</a></li>
                <li><a href="#" style="text-decoration: none; color: #333;">Sagarmatha</a></li>
                <li><a href="#" style="text-decoration: none; color: #333;">Manag</a></li>
            </ul>
        </div>

        <!-- Review Section -->
        <div class="footer-item" style="margin-bottom: 2rem;">
            <h2 style="color: #6c5ce7; font-size: 24px; font-weight: bold;">Customer Reviews</h2>
            <form id="reviewForm">
                <textarea id="reviewText" placeholder="Write your review here" style="width: 100%; height: 100px; padding: 10px; margin-bottom: 10px;"></textarea>
                <input type="submit" value="Submit Review" style="padding: 10px 20px; border: none; border-radius: 5px; background-color: #6c5ce7; color: #fff; cursor: pointer;">
            </form>
            <div id="reviews" style="margin-top: 20px; text-align: left;"></div>
        </div>
    </div>
</footer>





<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .copyright {
        margin: 0;
        font-siz: 30px;
        animation: slideInLeft 1s ease forwards;
        
    }

    .social-icons {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .social-icons a {
        margin: 0 10px;
        transition: transform 0.3s ease;
    }

    .social-icons a:hover {
        transform: scale(1.2);
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @media only screen and (max-width: 768px) {
        footer {
            flex-direction: column;
            padding: 10px;
        }
        .social-icons {
            margin-top: 10px;
            justify-content: center;
        }
    }
</style>
</head>
<body>

<footer>
    <p class="copyright">Copyright © 2021 Prabhat Ojha Travel Nepal</p>
    <div class="social-icons">
    <a href="https://www.facebook.com" style="color: #3b5998;" target="_blank"><img src="images/recipe_slides/Facebook_f_logo_(2021).svg.png" alt="Facebook" width="50"></a>
        <a href="#" style="color: #55acee;"><img src="images/recipe_slides/pngtree-twitter-social-media-round-icon-png-image_6315985.png" alt="Twitter" width="50"></a>
        <a href="#" style="color: #0077B5;"><img src="images/recipe_slides/linkedin-logo-linkedin-icon-transparent-free-png (1).webp" alt="LinkedIn" width="60"></a>
        <a href="#" style="color: #ff0000;"><img src="images/recipe_slides/7ddc545046b212d9ecc8eef83569222b.jpg" alt="YouTube" width="50"></a>
        <a href="#" style="color: #ff0000;"><img src="images/recipe_slides/Instagram_logo_2016.svg.webp" alt="Instagram" width="50"></a>

        <!-- Add more social media icons as needed -->
    </div>
</footer>    
              
     
    
    
      <script src="Travel-html/js/extrenaljq.js"></script>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/extrenaljq.js"></script>
</body>

</html>
