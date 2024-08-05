<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $reservation_id = $_GET['id'];
    
    $sql = "SELECT * FROM Reservation WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $reservation_id);
    $stmt->execute(); 
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $name = $row["name"];
        $NIC = $row["NIC"];
        $email = $row['email'];
        $contact = $row['contact'];
        $checkin = $row['checkin'];
        $checkout = $row['checkout'];
        $rooms = $row['rooms'];
        $eventtype = $row['eventtype'];
        $venue =$row['venue'];
        $days = $row['days'];
        $StartingDate = $row['StartingDate'];
        $starttime = $row['starttime'];
        $endtime = $row['endtime'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reservation</title>
    <link rel="stylesheet" href="Reservation.css">
</head>
<body>
    <div class="container">
        <h1>Update Reservation</h1>
        <form method="post" action="">
            <input type="hidden" name="reservation_id" value="<?php echo $reservation_id; ?>">
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="NIC">NIC:</label>
                <input type="text" id="NIC" name="NIC" value="<?php echo $NIC; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" value="<?php echo $contact; ?>" required>
            </div>
            <div class="form-group">
                <label for="checkin">ChechIn:</label>
                <input type="text" id="checkin" name="checkin" value="<?php echo $checkin; ?>" required>
            </div>
            <div class="form-group">
                <label for="checkout">CheckOut:</label>
                <input type="text" id="checkout" name="checkout" value="<?php echo $checkout; ?>" required>
            </div>
            <div class="form-group">
                <label for="rooms">Rooms:</label>
                <input type="text" id="rooms" name="rooms" value="<?php echo $rooms; ?>" required>
            </div>
            <div class="form-group">
                <label for="eventtype">EventType:</label>
                <input type="text" id="eventtype" name="eventtype" value="<?php echo $eventtype; ?>" required>
            </div>
            <div class="form-group">
                <label for="venue">venue:</label>
                <input type="text" id="venue" name="venue" value="<?php echo $venue; ?>" required>
            </div>
            <div class="form-group">
                <label for="days">Days:</label>
                <input type="text" id="days" name="days" value="<?php echo $days; ?>" required>
            </div>
            <div class="form-group">
                <label for="StartingDate">Starting Date:</label>
                <input type="text" id="StartingDate" name="StartingDate" value="<?php echo $StartingDate; ?>" required>
            </div>
            <div class="form-group">
                <label for="starttime">Start Time:</label>
                <input type="text" id="starttime" name="starttime" value="<?php echo $starttime; ?>" required>
            </div>
            <div class="form-group">
                <label for="endtime">End Time:</label>
                <input type="text" id="endtime" name="endtime" value="<?php echo $endtime; ?>" required>
            </div>
            
            <!-- Add other form fields here -->
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>

<?php
    } else {
        echo "No reservation found with the specified ID.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $reservation_id = $_POST['reservation_id'];
    $name = $_POST['name'];
    $NIC = $_POST['NIC'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rooms = $_POST['rooms'];
    $eventtype = $_POST['eventtype'];
    $venue = $_POST['venue'];
    $days = $_POST['days'];
    $StartingDate = $_POST['StartingDate'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];

    // Prepare and execute SQL statement
    $sql_update = "UPDATE Reservation SET name = ?, NIC = ?, email = ?, contact = ?, checkin = ?, checkout = ?, rooms = ?, eventtype = ?, venue = ?, days = ?, StartingDate = ?, starttime = ?, endtime = ?, UserID = 1 WHERE id = ?";

    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("sssisssiisssii", $name, $NIC, $email, $contact, $checkin, $checkout, $rooms, $eventtype, $venue, $days, $StartingDate, $starttime, $endtime, $reservation_id);

    if ($stmt_update->execute()) {
        echo "Data updated successfully";
    } else {
        echo "Failed: " . $stmt_update->error;
    }
}
?>
