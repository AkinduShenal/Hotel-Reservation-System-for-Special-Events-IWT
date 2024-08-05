<!DOCTYPE html>
<html lang="english">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise</title>
    <link rel="stylesheet" href="Homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
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
    <section class="home">
        <div class="content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="Image.jpeg" alt="Hotel Image">
                    <div class="text">
                        <h1>Spend your holidays</h1>
                        <p><h2>Elevate your event experience with our luxurious home reservation system. Perfect for weddings, conferences, and family gatherings.</h2></p>
                        <p><h3>Book now for unforgettable memories.</h3></p>
                        <div class="flex">
                            <button class="primary-btn">Read More</button>
                            <div class="buttonspc"></div>
                            <a href="http://localhost/IWT%20Group%20Project/Archive1/contact%20us/contactus.php" class="secondary-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="Image 1.png" alt="Hotel Image">
                    <div class="text">
                        <h1>Spend your holidays</h1>
                        <p>efwefegergregerffjffscdvgsfcv jcdsjhcvh jswcv jvhjcvsvhjcsdhjvcsvhjscsjcsdvhjcs</p>
                        <div class="flex">
                            <button class="primary-btn">Read More</button>
                            <button href="http://localhost/IWT%20Group%20Project/Archive1/contact%20us/contactus.php" class="secondary-btn">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            dots:false,
            navText:["<i class= 'fa fa-chevron-left'></i>","<i class= 'fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    </script>

    <section class="book" >
        <div class="container flex_space">
            <div class="text">
                <h1><span>Book</span> Your Rooms & Venues</h1>
            </div>
        <div class="form">
        <form class="grid">
<input type="date" placeholder="Araival Date">
<input type="date" placeholder="Departure Date">
<input type="date" placeholder="Araival Date">
<input type="number" placeholder="Adalts">
<input type="number" placeholder="Children">
<input type="submit" placeholder="CHECK AVALIBILITY">

        </form>
        </div>
    </div>
    </section>


<section class="about top">
        <div class="container flex">
        <div class="left">
            <div class="Heading">
                <h1>WELCOME</h1>
                <h2>Hotel Paradise</h2>
            </div>  
            <p>
                Welcome to Paradise Hotel, where luxury meets tranquility. Nestled in the heart of a pristine 
                tropical oasis, our hotel offers an unparalleled experience of relaxation and comfort. With 
                breathtaking views of lush greenery and sparkling azure waters, every moment spent here is a
                testament to indulgence.At Paradise Hotel, we pride ourselves on providing exceptional hospitality
                and personalized service to our guests. Whether you're seeking a romantic getaway, a family vacation, 
                or a corporate retreat, our array of meticulously designed rooms and suites cater to every need and desire.
                From spacious accommodations adorned with elegant furnishings to state-of-the-art amenities, we ensure a 
                stay that exceeds your expectations.
            </p>
            <button class="primary-btn">ABOUT US</button>
        </div>
    <div class="right">
        <img src="Image.jpg" alt="Hotel Image">
    </div>
    </div>
    </section>

<div class="fulltag">
<section class="counter top">
    <div class="container">
    <div class="box">
        <h1>
            2500
        </h1>
        <hr>
        <span>Happy Customer</span>
    </div>
    <div class="box">
        <h1>
          1250
        </h1>
        <hr>
        <span>Expert Customer</span>
    </div>
    <div class="box">
        <h1>
            3500
        </h1>
        <hr>
        <span>Desktop Reaired</span>
    </div>
</div>
    </section>

    </div>


<section class="rooms">
    <div class="container top">
        <div class="roomhead">
            <h1>EXPLORE</h1>
            <h2>Our Rooms</h2>
            <p>
                Step into a realm of unparalleled comfort and luxury with our meticulously crafted rooms, designed to elevate every moment of your special event. From intimate gatherings to grand celebrations, our diverse range of rooms caters to every occasion with style and sophistication. Immerse yourself in tastefully appointed interiors, luxurious amenities, and breathtaking views, creating the perfect backdrop for cherished memories. Whether it's a wedding, corporate retreat, or family reunion, our rooms set the stage for unforgettable experiences. Reserve your stay now and embark on a journey of unmatched hospitality and refinement.
            </p>    
        </div>
        <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="item">
                    <div class="image">
                        <img src="Image 2.jpg" alt="Room 1">
                    </div>
                    <div class="text">
                        <h2>Superior Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Indulge in the epitome of luxury with our Superior Rooms, where elegance meets comfort. These spacious sanctuaries offer a haven of tranquility, featuring stylish furnishings, plush bedding, and modern amenities to ensure a blissful stay. Whether you're unwinding after a day of festivities or preparing for a special event, our Superior Rooms provide the perfect retreat. With panoramic views of the surrounding landscape and personalized service at your fingertips, your experience is elevated to new heights sophistication.</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                            <h3>$300 <span> <br> Per Night </span></h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="Image 5.jpg" alt="Room 2">
                    </div>
                    <div class="text">
                        <h2>Deluxe Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Experience opulence redefined in our Deluxe Rooms, where sophistication and comfort harmonize effortlessly. Adorned with exquisite décor and upscale amenities, these rooms exude timeless elegance and charm. Sink into a haven of plush bedding and luxurious linens, surrounded by tasteful furnishings and modern conveniences. Whether you're hosting an intimate gathering or seeking a tranquil escape, our Deluxe Rooms cater to your every need. Immerse yourself in unparalleled comfort and style, and create memories that last a lifetime.</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                            <h3>$250 <span> <br> Per Night </span></h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="Image 6.jpg" alt="Room 2">
                    </div>
                    <div class="text">
                        <h2>Single Rooms</h2>
                        <div class="rate flex">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Discover the perfect blend of comfort and functionality in our thoughtfully designed Single Rooms. Ideal for solo travelers or intimate gatherings, these cozy retreats offer a peaceful oasis away from the hustle and bustle. Featuring all the essentials for a comfortable stay, including a comfortable bed, workspace, and modern amenities, our Single Rooms ensure a restful night's sleep and a rejuvenating experience. Whether you're exploring the city or attending a special event, our Single Rooms provide the perfect home away from home.</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                            <h3>$150 <span> <br> Per Night </span></h3>
                        </div>
                    </div>
                </div>
                <!-- Add more items for additional rooms -->
            </div>
        </div>
    </div>
</section>

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



<section class="rooms">
    <div class="container top">
        <div class="roomhead">
            <h1>JOIN WITH US</h1>
            <h2>For Your Events</h2>
            <p>
                Step into a world of endless possibilities with our exquisite selection of events and venues, meticulously curated to elevate every occasion to new heights. Whether you're planning a dream wedding, a corporate conference, or a celebratory soirée, our versatile spaces provide the perfect backdrop for unforgettable moments. From elegant ballrooms adorned with crystal chandeliers to lush outdoor gardens bathed in natural splendor, our venues are designed to inspire and enchant. With state-of-the-art facilities, impeccable service, and unparalleled attention to detail, we ensure that every event is a seamless and unforgettable experience. Let us turn your vision into reality and create cherished memories that last a lifetime.
            </p>    
        </div>
        <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="item">
                    <div class="image">
                        <img src="Image 3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>Wedding Halls</h2>
                        <p>Immerse yourself in the enchanting ambiance of our exquisite wedding halls, where dreams come to life and love blossoms in every detail. With timeless elegance and impeccable craftsmanship, our halls provide the perfect setting for your special day. From intimate ceremonies to grand receptions, our versatile spaces can be tailored to suit your unique vision, ensuring an unforgettable celebration that reflects your love story.</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="Image 7.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>Meeting Halls</h2>
                        <p>Elevate your corporate events and conferences with our sophisticated meeting halls, designed to inspire creativity, collaboration, and productivity. With state-of-the-art technology and customizable layouts, our halls offer the ideal environment for productive discussions, strategic planning sessions, and impactful presentations. Whether hosting a board meeting,our professional facilities and attentive service ensure a seamless and successful event.</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                            
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="Image 10.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>Outdoor Venues</h2>
                        <p>Embrace the beauty of nature and bask in the open air with our enchanting outdoor venues, where breathtaking landscapes provide the backdrop for unforgettable events. From lush gardens to scenic terraces, our outdoor spaces offer a tranquil oasis for weddings, receptions, cocktail parties, and social gatherings. With panoramic views, fragrant blooms, and the gentle rustle of foliage, our venues set the stage for magical moments and unforgettable memories.</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="Image 9.jpg" alt="">
                    </div>
                    <div class="text">
                        <h2>Pool VIbes & Party</h2>
                        <p>Dive into a world of fun and relaxation with our vibrant pool vibes and party venues, where every celebration is infused with energy, excitement, and endless entertainment. Whether you're hosting a poolside birthday bash, or a lively cocktail party, our dynamic spaces and vibrant ambiance ensure a memorable experience for you and your guests. With refreshing drinks, delectable cuisine,our poolside parties are guaranteed to make a splash!</p>
                        <div class="button flex">
                            <a <button href="http://localhost/IWT%20Group%20Project/Reservation%20Page/Reservation.php"class="primary-btn">BOOK NOW</button></a>
                        </div>
                    </div>
                </div>
                <!-- Add more items for additional rooms -->
            </div>
        </div>
    </div>
</section>
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

 <div class="container">
        <div class="review-icon">
            <i class="fas fa-comments"></i>
        </div>
        <div class="content">
            <h1>Reviews & Feedback</h1>
            <p>See what others are saying about us and leave your own feedback.</p>
            <a href="http://localhost/IWT%20Group%20Project/IWT%20A2New/fedback1.html" class="btn">Write a Review</a>

        </div>
    </div>



    <div class="jujuju"></div>


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
                    <li><a href="http://localhost/IWT%20Group%20Project/IWT%20A2New/PrivacyPolicy.html" style="color: white;">Privacy Policy</a></li>


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




</body>
</html>
