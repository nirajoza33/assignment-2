<?php
// Get the message from the AJAX request
$message = $_POST['message'];

// Append the message to a text file (you can replace this with a database)
file_put_contents('messages.txt', $message . "\n", FILE_APPEND);
?>
