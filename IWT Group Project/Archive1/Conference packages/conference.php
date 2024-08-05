<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise</title>
	<link rel="icon" type="jpg" href="logo.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
	
	<!-- horizontal navigation bar -->
<header>
        <div class="Navtop">
            <nav>
            <div class="content flex_space">
                <div class="logo">
                    <img src="logo.jpg" alt="Hotel Logo">
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
                    <li><a href="http://localhost/IWT%20Group%20Project/hirushi/login.php"><i></i> Sign In</a></li>
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
    <img src="con/360_F_439846866_jJwJchKXLZBFaCKjKILzk0Xb2cwSqteQ.jpg"alt="Big Image" class="center">
    <div class="container">
        <div class="partition partition-left">
          <center><input type="box" name="box" value="Facilities"></center>
            <p>Hotel Paradise offers state-of-the-art conference facilities with modern facilities, ensuring a seamless and productive event experience for all attendees.</p>
        </div>
        <div class="partition partition-right">
          <center><input type="box" name="box" value="Packages Types"></center>
            <p>Choose from our versatile conference packages, tailored for both indoor and outdoor events, providing flexibility and customization options to suit your specific needs.</p>
        </div>
    </div>
    <button class="bottom-button" onclick="viewMore()">View More</button>
    <script>
        function viewMore() {
          window.open('http://localhost/IWT%20Group%20Project/Archive1/Conference%20packages/con/Conferenece%20packages.jpg', '_blank');
        }
        </script>
		
		<!--Footer Starts here-->

	<footer>
		<center>
        <div class="">
            <div class="box">
                <img src="" alt="">
                <p class="new">
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
                <h2> Links </h2>
				
                <ul>
                    <li>Company History</li>
                    <li>About Us</li>
                    <li>Contacy Us</li>
                    <li>Services</li>
                    <li><a href="PrivacyPolicy.html"> Privacy Policy </a></li>
                </ul>
			</div>
 
			<div class="box">
				<h2>Contact Us</h2>
				
				<p>jkxbdkdhbcdciducakjchakchchudcicuchdcdgdcdcudud</p>
			
				<i class="fas fa-map-marker-alt"></i>
				<label>Vijayarama Road, Colombo 7</label>
				<i class="fas fa-phone" style="margin-right: 5px;"></i>
				<label>04522334455</label>
				<i class="fa fa-envelope"></i>
				<label>info@paradise.com</label>
			</div>
        </div>
		</center>
		
    </footer>
 
 
		<div class="legal">
			<p class="container">Copyright Holder All 2024 Rights Reserved.</p>
		</div>
 
	<script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:40,
            nav:true,
            dots:false,
            navText:["<i class= 'fa fa-chevron-left'></i>","<i class= 'fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2,
                    margin: 10,
                },
                1000:{
                    items:3
                }
            }
        });
    </script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
  <!--Footer Ends here-->

</body>
</html>
