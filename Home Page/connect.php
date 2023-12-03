<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['first_name']) && isset($_POST['last_name']) &&
        isset($_POST['username']) && isset($_POST['phone_number']) &&
        isset($_POST['password'])) {
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "valan";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT username FROM register WHERE username = ? LIMIT 1";
            $Insert = "INSERT INTO register(first_name, last_name, username, phone_number, password) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssis",$first_name, $last_name, $username, $phone_number, $password);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this username.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>