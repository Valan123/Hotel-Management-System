<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valan";

$name = $_POST['name'];
$card_number = $_POST['card_number'];
$card_type = $_POST['card_type'];
$exp_date = $_POST['exp_date'];
$cvv = $_POST['cvv'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO payment (holders_name, card_number, card_type, expiry, cvv)
VALUES ('$name', '$card_number', '$card_type','$exp_date','$cvv')";

if ($conn->query($sql) === TRUE) {

  echo "Noice";
  header( "Location: booked_info.php" );
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

