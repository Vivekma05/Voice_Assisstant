<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voice_commands";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Store command
$command = $_POST['command'];

$sql = "INSERT INTO commands (command_text) VALUES ('$command')";
if ($conn->query($sql) === TRUE) {
    echo "Command stored successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>