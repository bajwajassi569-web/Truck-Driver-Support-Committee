<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petition_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];

$sql = "INSERT INTO petition_signatures (name, email, amount) VALUES ('$name', '$email', '$amount')";

if ($conn->query($sql) === TRUE) {
  echo "Thank you for signing!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
