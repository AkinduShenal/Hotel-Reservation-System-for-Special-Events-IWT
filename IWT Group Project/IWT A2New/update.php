<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IWT";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$fullname  = "";
$phoneNo   = "";
$email   = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    // GET METHOD : shows the data of event..
    if (!isset($_GET["id"]))
    {
        header("location: viewfeedback.php");
        exit;
    }

        $id = $_GET["id"];

        // read the row of the selected event from the database file..
        $sql = "SELECT * FROM feedback WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if (!$row) 
        {
            // redirect to user to main form after enter data..
            header("location: viewfeedback.php");
            exit;
        }

        $fullname     = $row['fullname'];
        $phoneNo     = $row['phoneNo'];
        $email   = $row['email'];
        $message    = $row['message'];

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise</title>
	<link rel="icon" type="img/png" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="header-footer.css">
    <link rel="stylesheet" type="text/css" href="feedback1.css">
</head>
<body>
	
	<!-- horizontal navigation bar -->
	<div class="navbar">
			<div class="logo">
				<h1>Hotel<span>Paradise</span></h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Gallery</a></li>
					<li><a href="#">Events & Meetings</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="fedback1.html">Feedback</a></li>
				</ul>
			</div>
			<div class="login">
				<a href="#">Sign In</a>
				<a href="#">Manage</a>
			</div>
		</div>
	</div>
    <div class="contact-form">
        <form method="post" id="contact-form" action="feedback.php?id=<?php echo $id?>">
          <h2>Send Feedback</h2>
          <div class="input-box">
            <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>"required>

          </div>

          <div class="input-box">
            <input type="text" placeholder="Phone number" name="phoneNo" value="<?php echo $phoneNo; ?>"required>

          </div>

          <div class="input-box">
            <input type="email" placeholder="email" name="email" value="<?php echo $email; ?>"required>

          </div>

          <div class="input-box">
            <textarea placeholder="Type your feedback......." name="message" required><?php echo $message; ?></textarea>

          </div>

          <div class="input-box">
            <input type="submit" value="Send" name="update" onclick="myFunction();">

            <script>
              function myFunction() {
                alert("message sent successfully");
              }
            </script>
          </div>
        </form>
      </div>


    <!--Footer Starts here-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!--1st column-->
                <div class="footer-col">
                    <h4>Pages</h4>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <!--2nd column-->
                <div class="footer-col">
                    <ul>
                        <br>
                        <br>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="fedback1.html">Feedback</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <!--3rd column-->
                <div class="footer-col">
                    <h4>Office</h4>
                    <ul>
                        <li><a href="">312, Kandy rd</a></li>
                        <li><a href="">Malabe</a></li>
                        <li><a href="">+97 123134235</a></li>
                        <li><a href="">support@hotelparadise.com</a></li>
                    </ul>
                </div>
                <!--4th column-->
                
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <p>&#169; 2024 Hotel Paradise. All Rights Reserved.</p>
                </div>
                <div class="socialIcons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Ends here-->
    
</body>
<html>