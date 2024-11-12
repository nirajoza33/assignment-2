<?php
// Read the messages from the file
$messages = file('messages.txt');

// Output each message
foreach ($messages as $message) {
    echo '<div class="message"><span class="sender">User:</span> ' . htmlspecialchars($message) . '</div>';
}
?>
