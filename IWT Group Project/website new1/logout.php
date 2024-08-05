<?php
session_start();
header("Location: index.html");
// Clear all session variables
$_SESSION = [];

// Check if a session cookie is available
if (isset($_COOKIE[session_name()])) {
    // If so, delete the session cookie
    setcookie(session_name(), '', time() - 42000, '/');
}

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: index.html");
exit();
?>
