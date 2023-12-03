<?php
include_once 'db_connect.php';
$result = mysqli_query($conn,"SELECT * FROM booking");
?>

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
            <button  ></button>
            <li><a href= "#">Home</a></li>
            <li><a href= "add_rooms.php">Add Rooms</a></li>
            <li><a href= "customer_details.php">Customer Details</a></li>
            <li><a href="delete_rooms.php">Delete Rooms</a></li>
            <li><a href= "index.php">Log Out</a></li>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <div class="img-case">
                        <img src="img/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Customers Details</h2>
                        <a href="" class="btn">View All</a>
                    </div>
                    <?php
                    if(mysqli_num_rows($result)>0){
                    ?>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Customer Name</th>
                            <th>Room type</th>
                            <th>Location</th>
                            <th>Checkin-date</th>
                            <th>Checkout-date</th>
                            <th>Amount Paid</th>
                        </tr>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["id"];?></td>
                            <td><?php echo $row["customer_name"];?></td>
                            <td><?php echo $row["room_type"];?></td>
                            <td><?php echo $row["location"];?></td>
                            <td><?php echo $row["checkin"];?></td>
                            <td><?php echo $row["checkout"];?></td>
                            <td><?php echo $row["price"];?></td>
                        </tr>
                                <?php
                                $i++;
                        }
                        ?>
                    </table>
                    <?php
                    }
                    else
                    {
                        echo "No result found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>