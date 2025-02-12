<?php
// Simulated database
$usernames = ["joshua", "jennie", "admin", "user123"];

// Get the username from the request
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    if (in_array($username, $usernames)) {
        echo "Username already taken. Please try another.";
    } else {
        echo "Username is available.";
    }
} else {
    echo "No username provided.";
}
