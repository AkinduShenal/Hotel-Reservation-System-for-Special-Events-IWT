<?php

$conn = mysqli_connect("localhost", "root", "", "IWT");

if (!$conn){
    die("Connection Failed!" . mysqli_connect_error());
}

if (isset($_POST['sendbtn']))
{   
    
    $fullname     = $_POST['fullname'];
    $phoneNo     = $_POST['phoneNo'];
    $email   = $_POST['email'];
    $message    = $_POST['message'];
    
    $sql = "INSERT INTO feedback (fullname, phoneNo, email, message) VALUES ('$fullname', '$phoneNo', '$email', '$message')";

    $result = mysqli_query($conn, $sql);
        
    if($result)
    {
         echo "Payment Successful";
        header('location:viewfeedback.php');
    }
      else{
       die(mysqli_error($conn));
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete query
    $delete_sql = "DELETE FROM feedback WHERE id = '$id'";

    // Execute the delete query
    if ($conn->query($delete_sql)) {
        ?>
        <script>
             window.alert("delete Successfully");
             window.location.href ="viewfeedback.php";
        </script>
        <?php
        exit(0);
        } else 
        {
            ?>
        <?php
            exit(0);    
        }

}

if (isset($_POST['update']))
{ 
    $id = $_GET["id"]; 
$fullname     = $_POST['fullname'];
$phoneNo     = $_POST['phoneNo'];
$email   = $_POST['email'];
$message    = $_POST['message'];

    // update event to the database..
    $sql = "UPDATE feedback SET fullname = '$fullname', phoneNo = '$phoneNo', email = '$email', message = '$message' WHERE id = '$id'";

    $result = $conn->query($sql);

    if (!$result) 
    {
        $errorMessage = "Invalid Query :   " . $conn->error;
    }
    else
    {
        header("location:viewfeedback.php");
    }
    // redirect to user to main form after enter data..
    exit (0);
}
$conn->close();
?>
