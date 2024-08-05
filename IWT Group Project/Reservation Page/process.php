<?php
// Include database connection file
include('connect.php');


error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'] ?? '';
    $NIC = $_POST['NIC'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $checkin = $_POST['checkin'] ?? '';
    $checkout = $_POST['checkout'] ?? '';
    $rooms = $_POST['rooms'] ?? '';
    $eventtype = $_POST['eventtype'] ?? '';
    $venue = $_POST['venue'] ?? '';
    $days = $_POST['days'] ?? '';
    $StartingDate = $_POST['StartingDate'] ?? '';
    $starttime = $_POST['starttime'] ?? '';
    $endtime = $_POST['endtime'] ?? '';
    $UserID = $_POST['UserID'] ?? '';
    

    $stmt = $conn->prepare("INSERT INTO Reservation (name, NIC, email, contact, checkin, checkout, rooms, eventtype, venue, days, StartingDate, starttime, endtime, UserID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisiiiissiiiii", $name, $NIC, $email, $contact, $checkin, $checkout, $rooms, $eventtype, $venue, $days, $StartingDate, $starttime, $endtime, $UserID);


    if ($stmt->execute()) {
        echo '<script>alert("Reservation Successfully added."); window.location.href = "Viewreservation.php";</script>';

    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Form submission error.";
}

$conn->close();



?>
