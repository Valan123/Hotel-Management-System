<?php
include_once 'db_connect.php';
$result = mysqli_query($conn,"SELECT * FROM rooms");
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
        
        <br>
        <br>
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Delete Rooms</h2>
                    </div>
                    <?php
                    if(mysqli_num_rows($result)>0){
                    ?>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Room Image</th>
                            <th>Room Type</th>
                            <th>Room_No</th>
                            <th>AC or NO-AC</th>
                            <th>Description</th>
                            <th>Extra</th>
                            <th>Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["id"];?></td>
                            <td><img src = <?php echo $row['image'];?> width="100px;" height="100px;" alt="image"></td>
                            <td><?php echo $row["room_type"];?></td>
                            <td><?php echo $row["room_no"];?></td>
                            <td><?php echo $row["ac_non"];?></td>
                            <td><?php echo $row["des1"];?></td>
                            <td><?php echo $row["des2"];?></td>
                            <td><?php echo $row["price"];?></td>
                            <td>
                                <form action="delete.php" method = "post">
                                    <input type="hidden" name="delete_id" value = "<?php echo$row['id']?>">
                                    <button type="submit" name = "room_delete" class="btn">Delete</button>
                                </form>
                            </td>
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