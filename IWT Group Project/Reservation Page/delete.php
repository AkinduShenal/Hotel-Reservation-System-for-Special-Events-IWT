<?php
include "connect.php";
$id = $_GET["id"];
$sql = "DELETE FROM `Reservation` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: Viewreservation.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}