<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Hotel Luck</h1>
        </div>
        <ul>
            <button></button>
            <li><a href= "#">Home</a></li>
            <li><a href= "add_rooms.php">Add Rooms</a></li>
            <li><a href= "customer_details.php">Customer Details</a></li>
            <li><a href="delete_rooms.php">Delete Rooms</a></li>
            <li><a href= "index.php">Log Out</a></li>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
            </div>
        </div>
        <br>
        <br>
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Add Rooms</h2>
                    </div>
                    <div class="box-body">
                            <div class="form-group">
                              <h2>UPLOAD ROOM</h2>
                              <form action="" method="post" enctype="multipart/form-data">
                                  <div class="input-group">
                                           <input type="file" name="image" id="Firstname" required />
                                             <label for="image">ROOM IMAGE</label>
                                           </div>
                                           <br>
                                           <p>Room Type</p>
                <select class="inputbox" name="room_type" id="room_type" required>
                  <option value="">--Select The Room Type--</option>
                  <option value="Singles">Singles</option>
                  <option value="Couples">Couples</option>
                  <option value="Family">Family</option>
                </select>
                <br>
                <br>
             <div class="input-group">
                 <input type="number" name="room_no" id="Lastname" required />
                 <label for="Lastname">ROOM NO</label>
             </div>
             <br>
             <div class="input-group">
                 <input type="text" name="ac_non" id="username" required />
                 <label for="username">AC OR NON-AC</label>
             </div>
             <br>
             <div class="input-group">
                 <input type="text" name="desc" id="username" required />
                 <label for="username">LITTLE DESCRIPTION</label>
             </div>
             <br>
             <div class="input-group">
                <input type="text" name="extra" id="Number" required />
                <label for="Number">DESCRIPTION</label>
             </div>
             <br>
             <div class="input-group">
                 <input type="text" name="price" id="Password" required />
                 <label for="Password">PRICE</label>
            </div>
            <br>
             <input type="submit" value="UPLOAD" name="upload" class="btn">
                          </div>
                        </form>
                      </div> 
                </div>
            </div>
        </div>
    </div>
</body>

</html>


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

