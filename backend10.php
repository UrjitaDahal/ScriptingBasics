<?php
// Simulated user credentials for demonstration
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    'admin' => 'admin123'
];

// Set appropriate headers to allow cross-origin requests (if needed)
header('Content-Type: application/json');

// Retrieve data sent via AJAX
$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

// Validate credentials
if (array_key_exists($userid, $users) && $users[$userid] === $password) {
    echo json_encode(['status' => 'success', 'username' => $userid]);
} else {
    echo json_encode(['status' => 'error']);
}
