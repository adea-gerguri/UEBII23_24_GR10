<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Process the data (e.g., save to database, send an email, etc.)
    
    // Send a response back to the client
    echo "Name: $name, Email: $email";
} else {
    echo "Invalid request method.";
}
?>
