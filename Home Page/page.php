<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "valan";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainnew.css">
    <title>Rooms</title>
</head>
<body>
    <h1>Available Rooms for Singles🚶🏻‍♂️</h1>
                    <?php
                  $query = "SELECT * FROM rooms WHERE room_type = 'Singles'";
                  $query2 = mysqli_query($conn,$query);

                      while($row = mysqli_fetch_array($query2))
                      {
                       ?>
            
            <section class = "rooms sec-width" id = "rooms">

                <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <a href="booking.php?id=<?php echo $row['id'];?>"><img src = "<?php echo $row['image']; ?>" alt = ""></a>
                    </div>
                    <div class = "room-text">
                        <ul>
                            <h3>Facilities</h3>
                            <span id="room_type" hidden>Single</span>
                            <span id="adults" hidden>1</span>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Mini Fridge
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                <?php echo $row['ac_non'];?>
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                <?php echo $row['des1'];?>
                            </li>
                            <li>
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                <?php echo $row['des2'];?>
                            </li>
                        </ul>
                        <p>40 INCHES TV</p>
                        <p class = "rate">
                            <span>Rs.<span></span></span><span id="price"><?php echo $row['price'];?></span><span>/</span> Per Night
                        </p>
                        <a href="booking.php?id=<?php echo $row['id'];?>">
                            <input type="submit" value="BOOK NOW" class="btn" onclick="handleSubmit()"/>
                        </a>
                    </div>
                </article>
                <br>
                <br>
                <br>
                <!-- end of single room -->
            <?php
            }
          ?>
        </section>
    </form>
    <script src="index.js"></script>
    </body>
</html>