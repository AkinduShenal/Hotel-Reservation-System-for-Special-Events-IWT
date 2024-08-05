<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <link rel="stylesheet" href="Gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <div class="Navtop">
            <nav>
            <div class="content flex_space">
                <div class="logo">
                    <img src="Gold Exclusive Royal Luxury Hotel Logo-2.png" alt="Hotel Logo">
                </div>
                <ul class="navlinks">
                    <li><a href="http://localhost/IWT%20Group%20Project/Home%20Page/Homepage.php#home"></i> Home</a></li>
                    <li><a href="#aboutushttp://localhost/IWT%20Group%20Project/hirushi/Terms%20and%20conditions.php"><i></i> About Us</a></li>
                    <li><a href="http://localhost/IWT%20Group%20Project/Gallery%20Page/Gallery.php#gallery"><i></i> Gallery</a></li>
                    <li><a href="http://localhost/IWT%20Group%20Project/Archive1/wedding%20packages/wedding.php"><i></i> Events & Meetings</a></li>
                    <li><a href="http://localhost/IWT%20Group%20Project/Archive1/contact%20us/contactus.php"><i></i> Contact Us</a></li>
                    <li><a href="http://localhost/IWT%20Group%20Project/Archive1/FAQ/faq.php"><i></i> FAQ</a></li>
                    <li><a href="http://localhost/IWT%20Group%20Project/Home%20Page/Homepage.php#home"><i class="fas fa-home"></i></a></li>
                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                    <li><a href="http://localhost/IWT%20Group%20Project/Login_Registration/Login.html"><i></i> Sign In</a></li>
                    <li><a class="Manage" href="http://localhost/IWT%20Group%20Project/hirushi/sign.php"><i></i>Manage</a></li> <!-- Management Icon -->
                </ul>
                <button class="primary-btn">BOOK NOW</button>
                <script>
    const bookNowBtn = document.querySelector('.primary-btn');
    bookNowBtn.addEventListener('click', function() {
        
        window.location.href ='http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php';
    });
</script>
            </div>
        </nav>
        </div>
    </header>
<section class="gallery">
    <div class="container top">
        <div class="heading">
            <h1>PHOTOS</h1>
            <h2>Our Gallery</h2>
            <p>Step into our Gallery and behold the enchanting spaces that await your special events. From elegantly decorated indoor venues to picturesque outdoor settings, each image offers a glimpse into the magic of celebrations held at our hotel. Discover the perfect backdrop for your unforgettable moments and let us bring your vision to life.</p>
        <div class="topicRoom">
            ROOMS
        </div>
        </div>
        
        <div class="contentmtopp">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="img">
                        <img src="Image.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Standard Room</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Deluxe Room</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Single Room</h3>
                    </div>
                </div>
                <!-- Add more items here -->
            </div>
        </div>
    </div>

    <div class="topicEvent">
            Wedding Events
        </div>

<div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="img">
                        <img src="Image.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Wedding halls</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Foods</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Decorations</h3>
                    </div>
                </div>
                <!-- Add more items here -->
            </div>
        </div>
    </div>
<br>
    <div>
    <h1 class="topicEvent">
        Meetings
    </h1>
</div>

    <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="img">
                        <img src="Image.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Office Meetings</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Private Meeting</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Getherings</h3>
                    </div>
                </div>
                <!-- Add more items here -->
            </div>
        </div>
    </div>

<br>
    <div>
    <h1 class="topicEvent">
        Private Functions
    </h1>
    <br>
</div>

    <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="img">
                        <img src="Image.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Birthday Party</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 1.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Celebrations</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src="Image 2.jpg" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"></span>
                        <h3>Day Outs</h3>
                    </div>
                </div>
                <!-- Add more items here -->
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            768:{
                items:4,
                
            },
            1000:{
                items:6
            }
        }
    });
});
</script>

<br>

<footer>
        <div class="container grid">
            <div class="box">
                <img src="" alt="">
                <p>
                    Unlock unforgettable experiences with our cutting-edge hotel reservation system tailored for special events.
                     Seamlessly plan and manage your events with ease, whether it's a dream wedding, a corporate conference, or a memorable family reunion.
                      Our intuitive platform offers a range of features designed to simplify the reservation process, from customizable event packages to real-time availability tracking.
                       With robust tools for guest management, room allocation, and seamless communication, you can ensure every detail is perfectly orchestrated. 
                       Elevate your event planning experience and create cherished memories for you and your guests with our innovative hotel reservation system."
                </p>

                <div class="icon">
                    <div class="icon">
    <i class="fab fa-facebook-square"></i>
    <i class="fab fa-instagram-square"></i>
    <i class="fab fa-twitter-square"></i>
    <i class="fab fa-youtube-square"></i>
</div>

                </div>
            </div>
            <div class="box">
                <h2>
                    Links
                </h2>
                <ul>
                    <li>Company History</li>
                    <li>About Us</li>
                    <li>Contacy Us</li>
                    <li>Services</li>
                    <li>Privacy Policy</li>
                </ul>
           </div>

           <div class="box">
            <h2>Contact Us</h2>
            <p>
                jkxbdkdhbcdciducakjchakchchudcicuchdcdgdcdcudud
            </p>
            <i class="fas fa-map-marker-alt"></i>
            <label>Vijayarama Road, Colombo 7</label>
            <br>
            <i class="fas fa-phone" style="margin-right: 5px;"></i>
            <label>04522334455</label>
            <br>
            <i class="fa fa-envelope"></i>
            <label>info@paradise.com</label>
           </div>
        </div>
    </footer>


    <div class="legal">
        <p class="container">Copyright Holder All 2024 Rights Reserved.</p>

    </div>

</body>
</html>
