<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];

    $target_dir = "uploads/"; 
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if ($_FILES["image"]["size"] > 0) {

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }


        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }


        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

    
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                
                $query = "UPDATE outdoor_packages SET name='$name', description='$description', price='$price', capacity='$capacity', image='$target_file' WHERE id='$id'";
                mysqli_query($con, $query);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {

        $query = "UPDATE outdoor_packages SET name='$name', description='$description', price='$price', capacity='$capacity' WHERE id='$id'";
        mysqli_query($con, $query);
    }

    header("Location: dashboard.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM outdoor_packages WHERE id='$id'";
    $result = mysqli_query($con, $query);
    $package = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Edit Package</title>
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

<h2>Edit Package</h2>
<form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $package['id'] ?>">
    Name: <input type="text" name="name" value="<?= $package['name'] ?>" required><br>
    Description: <textarea name="description" required><?= $package['description'] ?></textarea><br>
    Price: <input type="number" name="price" value="<?= $package['price'] ?>" step="0.01" required><br>
    Capacity: <input type="number" name="capacity" value="<?= $package['capacity'] ?>" required><br>
    Current Image: <img src="<?= $package['image'] ?>" style="max-width: 200px; max-height: 200px;"><br>
    New Image: <input type="file" name="image" accept="image/*"><br>
    <input type="submit" value="Update Package">
</form>

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
