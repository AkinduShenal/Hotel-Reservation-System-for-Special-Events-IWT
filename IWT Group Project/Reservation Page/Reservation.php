<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking</title>
  <link rel="stylesheet" href="Reservation.css">
</head>
<body>
 <div class="container">
<h1>
  Hotel Reservation Form
</h1> 
 <form method="post" action="process.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="NIC">NIC:</label>
        <input type="number" id="NIC" name="NIC" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required>
    </div>
    <div class="form-group">
        <label for="check-in">Check-in Date:</label>
        <input type="date" id="check-in" name="checkin" required>
      </div>
      <div class="form-group">
        <label for="check-out">Check-out Date:</label>
        <input type="date" id="check-out" name="checkout" required>
      </div>
      <div class="form-group">
        <label for="rooms">Number of Rooms:</label>
        <input type="number" id="rooms" name="rooms" min="1" required>
      </div>
<h1>Event Information</h1>
<div class="form-group">
      <label for="event-type">Type of event:</label>
      <select id="event-type" name="eventtype">
        <option value="">Select</option>
        <option value="wedding">Wedding</option>
        <option value="conference">Conference</option>
        <option value="party">Party</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="venue">Venue:</label>
      <select id="venue" name="venue">
        <option value="">Select</option>
        <option value="Indor Venues">Indor Venues</option>
        <option value="Outdor Venues">Outdor Venues</option>
      </select>
    </div>
      <div class="form-group">
        <label for="days">Number of Days:</label>
        <input type="number" id="days" name="days" min="1" required>
      </div>

      <div class="form-group">
        <label for="Starting Date">Starting Date:</label>
        <input type="date" id="Starting Date" name="StartingDate" required>
      </div>

<div class="form-group">
         <h4>Reservation Timings</h4>
    <label for="start-time">Start Time:</label>
    <input type="time" id="start-time" name="starttime" required>
</div>
<div class="form-group">
  <label for="end-time">End Time:</label>
  <input type="time" id="end-time" name="endtime" required>
</div>

<div class="form-group">
        <label for="UserID">User ID:</label>
        <input type="number" id="UserID" name="UserID" required>
      </div>

<br>
<br>
      <button type="submit">Book Now</button>
</form>
 </div>
</body>
</html>