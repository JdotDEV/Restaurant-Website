<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process and save the form data as needed
    // For demonstration, we'll just return a success message
    echo "Comment posted successfully!";
} else {
    header("HTTP/1.0 400 Bad Request");
    echo "Invalid request";
}
?>