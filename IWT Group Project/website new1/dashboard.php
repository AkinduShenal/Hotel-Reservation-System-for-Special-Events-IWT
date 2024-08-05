<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}
include('connect.php');

//outdoor packages
$query = "SELECT * FROM outdoor_packages";
$result = mysqli_query($con, $query);
$outdoor_packages = mysqli_fetch_all($result, MYSQLI_ASSOC);

// indoor packages
$query = "SELECT * FROM indoor_packages";
$result = mysqli_query($con, $query);
$indoor_packages = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        <h2>Welcome to Admin Dashboard</h2>
        <p>You are logged in as admin.</p>
        
        
        <!--<a href="logout.php">Logout</a> -->
    </div>
    <div class="packages">
    <h2>Outdoor Venue Packages</h2>
    <a href="add_outdoor_package.php" class="btn">Add Outdoor Package</a>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Capacity</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($outdoor_packages as $package): ?>
    <tr>
        <td><?= $package['name'] ?></td>
        <td><?= $package['description'] ?></td>
        <td><?= $package['price'] ?></td>
        <td><?= $package['capacity'] ?></td>
        <td>
        
            <a href="edit_outdoor_package.php?id=<?= $package['id'] ?>"class="btn-1">Edit Outdoor Package</a>
            <form action="delete_outdoor_package.php" method="post">
                <input type="hidden" name="id" value="<?= $package['id'] ?>">
                <input type="submit" value="Delete Outdoor Package">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Indoor Venue Packages</h2>
<a href="add_indoor_package.php" class="btn">Add Indoor Package</a>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Capacity</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($indoor_packages as $package): ?>
    <tr>
        <td><?= $package['name'] ?></td>
        <td><?= $package['description'] ?></td>
        <td><?= $package['price'] ?></td>
        <td><?= $package['capacity'] ?></td>
        <td>
        
            <a href="edit_indoor_package.php?id=<?= $package['id'] ?>"class="btn">Edit Indoor Package</a>
            <form action="delete_indoor_package.php" method="post">
                <input type="hidden" name="id" value="<?= $package['id'] ?>">
                <input type="submit" value="Delete Indoor Package">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    </div>
</body>

</html>
