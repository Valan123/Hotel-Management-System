<?php
include 'db_connect.php';

if(isset($_POST['room_delete'])){
    $delete_id = $_POST['delete_id'];

    $query = "DELETE FROM rooms WHERE id='$delete_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['success'] = "Room is deleted";
        header("Location: delete_rooms.php");
    }
    else{
        $_SESSION['status'] = "Unable to Delete the room";
        header("Location: delete_rooms.php");
    }
}