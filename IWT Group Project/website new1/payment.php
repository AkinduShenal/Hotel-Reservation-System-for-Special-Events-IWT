<?php

include('connect.php');
if (isset($_GET['id'])) {
  $package_id = $_GET['id'];
    
    $query = "SELECT * FROM indoor_packages WHERE id = '$package_id'";
    $result = mysqli_query($con, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $package = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Option</title>
  <link rel="stylesheet"type="text/css"href="stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
    
</head>

<header>
        <div class="Navtop">
            <nav>
            <div class="content flex_space">
                <div class="logo">
                    <img src="uploads/logo.jpg" alt="Hotel Logo">
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

<body>
  <div class="container">
    <header>
      <h1>Payment Option</h1>
    </header>
    <main>
      <div class="content">
        <div class="summary-box">
          <h3>Summary</h3>
          <table id="summary-table">
          
            <tr>
              <th>Package</th>
              <th>Description</th>
              <th>Price</th>
            </tr>
            <tr>
            <td><?= htmlspecialchars($package['name']) ?></td>
              <td><?= htmlspecialchars($package['description']) ?></td>
              <td><?= htmlspecialchars($package['price']) ?></td>
            </tr>
            
          </table>
        </div>
        <div class="payment-details">
          <h2>Card Payments</h2>
          <label for="card-type-visa">
            <img src="images/visa.png" alt="Visa logo" width="50px" id="card-type-visa" class="card-image">
          </label>
          <label for="card-type-mastercard">
            <img src="images/shopping.png" alt="Mastercard logo" width="50px" id="card-type-mastercard" class="card-image">
          </label>
          <label for="card-type-amex">
            <img src="images/card.png" alt="American Express logo" width="50px" id="card-type-amex" class="card-image">
          </label>
          <label for="card-type-discover">
            <img src="images/card (1).png" alt="Discover logo" width="50px" id="card-type-discover" class="card-image">
          </label>
          <br>
          <form id="payment-form">
            <div class="payment-details">
              <div class="card-details">
            <label for="cardnumber">Card Number:</label><br>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="XXXX XXXX XXXX XXXX" pattern="[0-9]{16}" required><br><br>
            <label for="cardname">Name on Card:</label><br>
            <input type="text" id="cardname" name="cardname" placeholder="John Doe" required><br>
          </div>
          <br>
            <div class="expiry-container">
            <label for="expmonth">Expiry Month:</label><br>
            <select id="expmonth" name="expmonth" required>
              <option value="">Month</option>
              <option value="1">Jan</option>
              <option value="02">Feb</option>
              <option value="03">Mar</option>
              <option value="04">Apr</option>
              <option value="05">May</option>
              <option value="06">Jun</option>
              <option value="07">Jul</option>
              <option value="08">Aug</option>
              <option value="09">Sep</option>
              <option value="10">Oct</option>
              <option value="11">Nov</option>
              <option value="12">Dec</option>
            </select><br>
            <label for="expyear">Expiry Year:</label><br>
            <select id="expyear" name="expyear" required>
              <option value="">Year</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
              <option value="2026">2026</option>
              <option value="2027">2027</option>
              <option value="2028">2028</option>
              </select><br>
            <label for="cvv">CVV:</label><br>
            <input type="text" id="cvv" name="cvv" placeholder="XXX" pattern="[0-9]{3}" maxlength="3" required><br></div>
            <button type="button" class="cancel-button">Cancel</button>
          <button type="submit" form="payment-form" class="pay-button">Pay Now</button>
          </form>
          
        </div>
          
        </div>
      </div>
    </main>
  </div>
  
  <script src="script.js"></script>
</body>
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
</html>
<?php
} else {
        // Package not found
        echo "Package not found!";
    }
} else {
    // No package ID provided
    echo "No package ID provided!";
}
?>