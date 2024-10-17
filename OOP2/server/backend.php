<?php
session_start();

// Initialize messages array if not already set
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

// Handle GET request to retrieve messages
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Content-Type: application/json');
    echo json_encode($_SESSION['messages']);
    exit;
}

// Handle POST request to add a new message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['message'])) {
        $now = new DateTime();
        $messageObject = [
            'date' => $now->format('Y-m-d'),
            'time' => $now->format('H:i:s'),
            'message' => $input['message']
        ];
        $_SESSION['messages'][] = $messageObject;
    }
    header('Content-Type: application/json');
    echo json_encode($_SESSION['messages']);
    exit;
}

// If request method is not GET or POST, return 405 Method Not Allowed
http_response_code(405);
header('Content-Type: application/json');
echo json_encode(['error' => 'Method Not Allowed']);
?>