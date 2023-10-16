<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "klwt";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST['date'];
$time = $_POST['time'];
$people = $_POST['people'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO reservation (date, time, people, name, phone, email)
VALUES ('$date', '$time', '$people', '$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: reservation.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>