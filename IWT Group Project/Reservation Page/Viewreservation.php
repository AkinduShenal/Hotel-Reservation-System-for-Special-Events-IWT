<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Reservations</title>
  <link rel="stylesheet" href="Viewreservation.css">
</head>
<body>
 <div class="container">
    <div class="table">
<h1>
  My Reservations
</h1> 

<table>
  <tr>
    <th>Reservation ID</th>
    <th>Name</th>
    <th>NIC</th>
    <th>Email</th>
    <th>Update Option</th>
    <th>Delete Option</th>
  </tr>
    </div>

  
<?php

include('connect.php');

session_start();

$userID = 1;
// Retrieve reservations for the specified user from the database
$sql = "SELECT * FROM Reservation WHERE UserID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute(); 
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Output each reservation as a table row
        echo "<tr>";
        echo "<td>" . $row["UserID"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["NIC"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        // echo "<td><a href='Updatereservation.php?id=" . $row["id"] .">Update</a></td>";
        // echo "<td><a href='Updatereservation.php?id=" . $row["id"] . ">Update</a></td>";
        echo "<td><a href='Updatereservation.php?id=" . $row["id"] . "'>Update</a></td>";
        echo "<td><a href='delete.php?action=delete&id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this reservation?\")'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No reservations found for the specified user.</td></tr>";
} 

?>
</table>

</div>
</body>
</html>

