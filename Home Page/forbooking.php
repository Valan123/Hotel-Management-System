<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valan";

$roomId = $_POST['roomId'];
$customedId = $_COOKIE['userId'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$name = $_POST['name'];
$location = $_POST['category'];
$adults = $_POST['adults'];
$room_type = $_POST['room_type'];
$price = $_POST['price'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO booking (room_id, customer_id, checkin, checkout, customer_name, location, no_of_adults, room_type, price)
VALUES ('$roomId','$customedId', '$checkin', '$checkout', '$name' , '$location' , '$adults' , '$room_type','$price')";
$conn->query($sql);

if ($sql)
{
  echo "Data Updated";
  header( "Location: payment.php" );

}
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

