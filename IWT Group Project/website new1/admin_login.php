
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get username and password 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($con, $query);


    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);


        if ($password == $user['password']) {

            $_SESSION['admin_id'] = $user['id'];
            header('Location: dashboard.php');
            exit();
        } else {
            
            echo "Incorrect password!";
        }
    } else {
        
        echo "Username not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="view\styles\styles.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
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
    <br>
    <div class="container">
        <h2>Admin Login</h2>
        <form action="admin_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>
