<?php
include_once 'db_connect.php';
$customedId = $_COOKIE['userId'];
$result = mysqli_query($conn,"SELECT * FROM booking where customer_id=$customedId");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Booked Rooms</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="booked_rooms.css"/>
</head>
        <div class="header">
            <h1>Booked Rooms</h1>
        </div>
		<?php
        if(mysqli_num_rows($result)>0){
        ?>
   <table class="table">
     <thead>
     	<tr>
     	 <th>Name of the Booker</th>
     	 <th>Room_type</th>
     	 <th>location</th>
     	 <th>Check-In</th>
     	 <th>Check-Out</th>
         <th>Price</th>
     	</tr>
     </thead>
     <tbody>
	 <?php
        $i=0;
        while($row = mysqli_fetch_array($result)){
        ?>
     	  <tr>
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
     </tbody>
   </table>
   <?php
                    }
                    else
                    {
                        echo "No result found";
                    }
                    ?>

</body>
</html>