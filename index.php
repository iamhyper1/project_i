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

    <Section id="welcome_Sec">
        <div class="container">
            <h2><span>The official travel site of the friendly Nepal<span></h2>
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
        </div>
    </Section>

    <Section id="slides_parent">
        <div class="container">
            <div class="slides">
                <div class="slide_1">
                    <div class="slide_info">
                        <p>Annapurna Base Camp</p>
                    </div>
                </div>
                <div class="slide_1 slide_2">
                    <div class="slide_info">
                        <p>Kulekhani Dam</p>
                    </div>
                </div>
                <div class="slide_1 slide_3">
                    <div class="slide_info">
                        <p>Fewa Lake, Pokhara</p>
                    </div>
                </div>
                <div class="slide_1 slide_4">
                    <div class="slide_info">
                        <p>Sagarmatha</p>
                    </div>
                </div>
                <div class="slide_1 slide_5">
                    <div class="slide_info">
                        <p>Pasupatinath Temple</p>
                    </div>
                </div>
                <div class="slide_1 slide_6">
                    <div class="slide_info">
                        <p>Upper Mustang Village</p>
                    </div>
                </div>
                <div class="slide_1 slide_7">
                    <div class="slide_info">
                        <p>Syambhunath Temple</p>
                    </div>
                </div>
            </div>
        </div>
    </Section>
  
    <section id="explore-fiji">
    <div class="container">
        <div class="explore-content-par">
            <div class="explore-info">
                <h3>Book Now </h3>
                <div id="clockdiv">
                    <h1 class="typewrite" data-period="2000" data-type='["Welcome to Book Now Page"]'></h1>
                </div>
            </div>
            <div class="counter-form">
            <form id="bookingForm" action="submit_form.php" method="post" onsubmit="return confirmSubmit() && validateForm()">
    <input type="text" id="fname" name="firstname" placeholder="Your name.." pattern="[A-Za-z]+" title="Please enter alphabetic characters only" required>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." pattern="[A-Za-z]+" title="Please enter alphabetic characters only" required>
    <input type="email" id="email" name="email" placeholder="Your Email.." required style="background-color: transparent; color: pink;">
    <input type="text" id="phone" name="phone" placeholder="Your Phone Number.." pattern="^9[78]\d{8}$" title="Please enter a valid phone number starting with 98 or 97" required>
    <input type="text" id="person" name="person" placeholder="Enter How Many Person you want to go.." pattern="[0-9]+" title="Please enter numeric characters only" required>
    <!-- Date picker input fields for "From" and "To" dates -->
    <label for="fromDate">From:</label>
    <input type="text" id="fromDate" name="from_date" placeholder="Select From date.." required>
    <label for="toDate">To:</label>
    <input type="text" id="toDate" name="to_date" placeholder="Select To date.." required>
    <select id="country" name="country" required style="color: white;">
        <option value="Pasupatinath">Pasupatinath Temple</option>
        <option value="Swayambhu">Swayambhu</option>
        <option value="Mustang">Mustang</option>
        <option value="Pokhara">Pokhara</option>
        <option value="Patan Durbar">Patan Durbar</option>
        <option value="Lumbini">Lumbini</option>
        <option value="Kulekhani Dam">Kulekhani Dam</option>
    </select>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
    <input type="submit" value="Submit" onclick="return confirmSubmit()">
</form>


            </div>
        </div>
    </div>
</section>

<!-- Popup Box HTML -->
<div id="popupBox" style="display: none; position: fixed; z-index: 1; padding-top: 100px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div style="background-color: white; margin: auto; padding: 20px; border-radius: 10px; width: 50%; text-align: center; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); display: flex; flex-direction: column; align-items: center;">
        <span style="color: #aaa; align-self: flex-end; font-size: 28px; font-weight: bold; cursor: pointer;" onclick="hidePopup()">&times;</span>
        <p style="font-size: 20px; margin-bottom: 20px;">Do you want to submit?</p>
        <div style="display: flex; gap: 20px;">
            <button style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;" onclick="document.getElementById('bookingForm').submit()">Yes</button>
            <button style="padding: 10px 20px; background-color: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer;" onclick="hidePopup()">No</button>
        </div>
    </div>
</div>

<!-- JavaScript library for date picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.js"></script>

<script>
     function confirmSubmit() {
        if (!isLoggedIn()) {
            alert("Please login first. Without login, you cannot submit or interact with the website.");
            return false;
        }
        return confirm("Do you want to submit?");
    }
    function isLoggedIn() {
        // Check if a session variable indicating user login status exists
        var loggedIn = <?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>;
        return loggedIn;
    }

    function validateForm() {
        var fname = document.getElementById("fname").value.trim();
        var lname = document.getElementById("lname").value.trim();
        var email = document.getElementById("email").value.trim();
        var phone = document.getElementById("phone").value.trim();
        var person = document.getElementById("person").value.trim();
        var fromDate = document.getElementById("fromDate").value.trim();
        var toDate = document.getElementById("toDate").value.trim();
        var country = document.getElementById("country").value.trim();
        var subject = document.getElementById("subject").value.trim();
        
        if (fname === "" || lname === "" || email === "" || phone === "" || person === "" || fromDate === "" || toDate === "" || country === "" || subject === "") {
            alert("Please fill all the fields to submit.");
            return false;
        }

        if (!/^[A-Za-z]+$/.test(fname) || !/^[A-Za-z]+$/.test(lname)) {
            alert("Please enter alphabetic characters only for first name and last name.");
            return false;
        }
        

        if (!/^9[78]\d{8}$/.test(phone)) {
            alert("Please enter a valid phone number starting with 98 or 97.");
            return false;
        }

        var personInt = parseInt(person, 10);
        if (isNaN(personInt) || personInt < 1 || personInt > 15) {
            alert("Please enter a valid number of persons (1-15).");
            return false;
        }

        var fromDateObj = new Date(fromDate);
        var toDateObj = new Date(toDate);
        var today = new Date();

        if (fromDateObj < today || toDateObj < today || toDateObj <= fromDateObj) {
            alert("Please select valid dates. From date should be after today and To date should be after From date.");
            return false;
        }

        return true;
    }

    function showPopup() {
        document.getElementById("popupBox").style.display = "flex";
    }

    function hidePopup() {
        document.getElementById("popupBox").style.display = "none";
    }

    flatpickr("#fromDate", {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: "today",
        altInput: true,
        altFormat: "F j, Y"
    });

    flatpickr("#toDate", {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: "today",
        altInput: true,
        altFormat: "F j, Y"
    });
</script>

</section>

<!-- JavaScript library for date picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.js"></script>
<!-- CSS for date picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.6/flatpickr.min.css">

<script>
    // Function to validate the form
    function validateForm() {
        var durationTime = document.getElementById("durationTime").value;
        // Validate duration time format (e.g., From....To)
        if (!/^[A-Za-z]+(\.{3}To[A-Za-z]+)$/.test(durationTime)) {
            alert("Please enter duration time in the correct format (e.g., From....To)");
            return false;
        }

        var email = document.getElementById("Email").value;
        // Validate email using a regular expression
        if (!validateEmail(email)) {
            alert("Please enter a valid email address");
            return false;
        }

        return true;
    }

    // Function to validate email using regular expression
    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    // Initialize date picker
    flatpickr("#durationTime", {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: "today",
        altInput: true,
        altFormat: "F j, Y",
        inline: false
    });
</script>

</section>
    

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
    

    <section id="fiji-holyday">
        <div class="container">
            <h3>Start planning your dream holiday</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/Phewa_lake_,_Pokhara.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Fewa Lake</h3>
                            <p>Pokhara</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Pasupatinath Temple     </h3>
                            <p>Kathmandu</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/maxresdefault-30.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Swayambhu Nath </h3>
                            <p>Kathmandu</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/images.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Mustang</h3>
                            <p>Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/Annapurna-Helicopter-and-Trekking.jpeg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Annapurna Base Camp</h3>
                            <p>Nepal</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/recipe_slides/ama-dablam-himalayas-sagarmatha-national-park-national-park-wallpaper-preview.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3>Sagarmatha </h3>
                            <p>Nepal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .blog-box {
        display: flex;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        overflow: hidden; /* Ensure content doesn't overflow */
        transition: box-shadow 0.3s ease;
    }
    .blog-box:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .blog-img {
        flex: 1;
        margin-right: 20px;
        position: relative;
        overflow: hidden;
    }
    .blog-img img {
        width: 100%; /* Adjusted to fit container */
        height: auto;
        border-radius: 5px;
        transition: transform 0.3s ease;
    }
    .blog-img:hover img {
        transform: scale(1.1);
    }
    .blog-description {
        flex: 2;
        padding: 20px;
    }
    .blog-description h4 {
        margin-top: 0;
        font-weight: bold;
        font-size: 18px;
    }
    .blog-description p {
        margin-bottom: 0;
        font-size: 16px;
        line-height: 1.6;
    }

    /* Make images responsive */
    @media only screen and (max-width: 600px) {
        .blog-img img {
            max-width: 100%;
            height: auto;
        }
    }
</style>
</head>
<body>
    <section id="blog">
        <div class="container">
            <h3>About Historical Places Of Nepal</h3>
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-responsive" src="images/recipe_slides/pashupatinath_sm_pilgrims-1624452531.jpeg" alt="Pashupatinath Temple">
                </div>
                <div class="blog-description">
                    <h4>श्री पशुपतिनाथ मन्दिर</h4>
                    <p>The Pashupatinath Temple (Nepali: पशुपतिनाथ मन्दिर) is a Hindu temple dedicated to Pashupati, a form of Shiva, and is located in Kathmandu, Nepal near the Bagmati River. This temple was classified as a World Heritage Site in 1979. This "extensive Hindu temple precinct" is a "sprawling collection of temples, ashrams, images and inscriptions raised over the centuries along the banks of the sacred Bagmati river", and is one of seven monument groups in UNESCO's designation of Kathmandu Valley. It is built on an area of 246 hectares (2,460,000 m2)and includes 518 mini-temples and a main pagoda house..</p>
                    <div style="border: 2px solid #4CAF50; padding: 10px; border-radius: 10px; display: inline-block; background-color: #f2f2f2; transition: background-color 0.3s, border-color 0.3s;">
            <a href="pasupatinath.php" class="read-more" style="text-decoration: none; color: #4CAF50; font-weight: bold;">Read More</a>
        </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-responsive" src="images/recipe_slides/2022110811118_6159ce54bd04f19f9135172adc6dc596abd0c761398827bb3437027690d6682c.jpg" alt="Pashupatinath Temple">
                </div>
                <div class="blog-description">
                    <h4>लुम्बिनी</h4>
                    <p>is a Buddhist pilgrimage site in the Rupandehi District of Lumbini Province in Nepal. It is the place where, according to Buddhist tradition, queen Maya gave birth to Siddhartha Gautama at around 566 BCE.Gautama, who, according to Buddhist tradition, achieved Enlightenment some time around 528 BCE,became Shakyamuni Buddha and founded Buddhism. Lumbini is one of many magnets for pilgrimage that sprang up in places pivotal to the life of the Buddha.</p>
                    <div style="border: 2px solid #4CAF50; padding: 10px; border-radius: 10px; display: inline-block; background-color: #f2f2f2; transition: background-color 0.3s, border-color 0.3s;">
            <a href="readmore.php" class="read-more" style="text-decoration: none; color: #4CAF50; font-weight: bold;">Read More</a>
        </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-responsive" src="images/recipe_slides//about-swayambhunath_1552978452.jpg" alt="Pashupatinath Temple">
                </div>
                <div class="blog-description">
                    <h4>स्वयम्भू स्तूप</h4>
                    <p>Swayambhunath Stupa, also known as “Monkey Temple” is located on the hilltop in the Northwest of Kathmandu Valley. It is a peaceful place where the beautiful panoramic view of the Kathmandu city can be observed. It is said that the glory of Kathmandu valley has been started from here.</p>
                    <div style="border: 2px solid #4CAF50; padding: 10px; border-radius: 10px; display: inline-block; background-color: #f2f2f2; transition: background-color 0.3s, border-color 0.3s;">
            <a href="syambhunath.php" class="read-more" style="text-decoration: none; color: #4CAF50; font-weight: bold;">Read More</a>
        </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img class="img-responsive" src="images/recipe_slides/temple-g2f93590bb_1920.jpg" alt="Pashupatinath Temple">
                </div>
                <div class="blog-description">
                    <h4> पाटन दरवार</h4>
                    <p> is situated at the centre of the city of Lalitpur in Nepal. It is one of the three Durbar Squares in the Kathmandu Valley, all of which are UNESCO World Heritage Sites. One of its attractions is the medieval royal palace where the Malla Kings of Lalitpur resided.The Durbar Square is a marvel of Newar architecture. The square floor is tiled with red bricks. There are many temples and statues in the area. The main temples are aligned opposite the western face of the palace. The entrance of the temples faces east, towards the palace. There is also a bell situated in the alignment beside the main temples.</p>
                    <div style="border: 2px solid #4CAF50; padding: 10px; border-radius: 10px; display: inline-block; background-color: #f2f2f2; transition: background-color 0.3s, border-color 0.3s;">
            <a href="readmore.php" class="read-more" style="text-decoration: none; color: #4CAF50; font-weight: bold;">Read More</a>
        </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // JavaScript for hover effect on images
        const images = document.querySelectorAll('.blog-img img');
        images.forEach(image => {
            image.addEventListener('mouseenter', () => {
                image.style.transform = 'scale(1.1)';
            });
            image.addEventListener('mouseleave', () => {
                image.style.transform = 'scale(1)';
            });
        });
    </script>
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
        <style>
        .footer-item {
            margin-bottom: 2rem;
        }

        #reviews {
            margin-top: 20px;
            text-align: left;
        }

        /* Style for the star rating */
        #starRating {
            color: yellow; /* Set the color of the stars */
        }

        /* Style for the review text and user name */
        #userName,
        #reviewText {
            color: black; /* Set the text color of the input fields to white */
        }
    </style>
</head>
<body>
    <div class="footer-item">
        <h2 style="color: #6c5ce7; font-size: 24px; font-weight: bold;">Customer Reviews</h2>
        <form id="reviewForm">
            <input type="text" id="userName" name="userName" placeholder="Your Name" style="width: 100%; padding: 10px; margin-bottom: 10px;">
            <textarea id="reviewText" name="reviewText" placeholder="Write your review here" style="width: 100%; height: 100px; padding: 10px; margin-bottom: 10px;"></textarea>
            <label for="starRating">Star Rating:</label>
            <select id="starRating" name="starRating" style="padding: 10px; margin-bottom: 10px;">
                <option value="1">&#9733; </option>
                <option value="2">&#9733;&#9733;</option>
                <option value="3">&#9733;&#9733;&#9733; </option>
                <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
            </select>
            <input type="submit" value="Submit Review" style="padding: 10px 20px; border: none; border-radius: 5px; background-color: #6c5ce7; color: #fff; cursor: pointer;">
        </form>
        <div id="reviews"></div>
    </div>

    <script>
        document.getElementById('reviewForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission
            var userName = document.getElementById('userName').value;
            var reviewText = document.getElementById('reviewText').value;
            var starRating = document.getElementById('starRating').value;

            // Send review data to the server for saving
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_review.php'); // Replace 'save_review.php' with your server-side script
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Display success message in a popup
                    alert('Review submitted successfully');

                    // Clear the form fields
                    document.getElementById('userName').value = '';
                    document.getElementById('reviewText').value = '';
                    document.getElementById('starRating').value = '1'; // Reset star rating to default
                } else {
                    console.log('Error saving review:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed');
            };
            xhr.send('userName=' + encodeURIComponent(userName) + '&reviewText=' + encodeURIComponent(reviewText) + '&starRating=' + encodeURIComponent(starRating));
        });
    </script>
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
