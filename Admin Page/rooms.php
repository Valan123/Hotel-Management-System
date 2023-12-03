<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valan";

$target_dir = "../img/images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

$file="../img/images/".basename($_FILES["image"]["name"]);
$room_type = $_POST['room_type'];
$room_no = $_POST['room_no'];
$ac_non = $_POST['ac_non'];
$desc = $_POST['desc'];
$extra = $_POST['extra'];
$price = $_POST['price'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO rooms (image, room_type, room_no, ac_non, des1, des2, price)
VALUES ('$file','$room_type', '$room_no', '$ac_non' , '$desc' , '$extra' , '$price')";

move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript"> alert("New Room Added")</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

