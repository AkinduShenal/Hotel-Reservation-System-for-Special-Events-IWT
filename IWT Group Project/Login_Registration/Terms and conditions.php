<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Terms and Conditions</title>
</head>
  <body> 
    <div class="container">
  <h1>Terms and Conditions</h1>
  <hr>
  <div class="points">
    <p>• Specifies the cancellation policy, detailing any fees or penalties for canceling reservations within a certain timeframe.</p>
    <p>• Clearly communicates the hotel's rules and policies, including noise regulations, smoking policies, and pet policies.</p>
    <p>• Specifies whether the hotel will pre-authorize or charge the guest's credit card before arrival.</p>
    <p>• Clearly communicates the hotel's rules and policies, including noise regulations, smoking policies, and pet policies.</p>
  </div>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>
            <input type="checkbox" name="accept" required>
            I accept the terms and conditions
        </label><br>
        <button type="submit" name="submit">Accept</button>
        <button type="submit" name="decline">Decline</button>
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the accept button is clicked
        if (isset($_POST['accept'])) {
            // Process accept action
            // You can add your logic here, for example, saving the acceptance to a database
            echo "You accepted the terms and conditions.";
        } elseif (isset($_POST['decline'])) {
            // Process decline action
            // You can add your logic here, for example, redirecting the user to another page
            echo "You declined the terms and conditions.";
        }
    }
    ?>

</body>
</html>
