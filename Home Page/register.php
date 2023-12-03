<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['first_name']) && isset($_POST['last_name']) &&
        isset($_POST['username']) && isset($_POST['phone_number']) &&
        isset($_POST['password']))
        {
        
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
                if ($stmt->execute()) 
                {
                    echo '<script>"type:text/javascript"> alert("Your Account Have been Created")</script>';
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo '<script>"type:text/javascript"> alert("Someone already registers using this username")</script>';
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
    echo "Nothing happened";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>New Register</title>
</head>
<body>
    <div class="creating-account">
        <form action="" method="post" class="form">
            <h2>Create New Account</h2>
            <div class="input-group">
                <input type="text" name="first_name" id="Firstname" required />
                 <label for="Firstname">First Name</label>
            </div>
             <div class="input-group">
                 <input type="text" name="last_name" id="Lastname" required />
                 <label for="Lastname">Last Name</label>
             </div>
             <div class="input-group">
                 <input type="text" name="username" id="username" required />
                 <label for="username">username</label>
             </div>
             <div class="input-group">
                <input type="number" name="phone_number" id="Number" required />
                <label for="Number">Phone Number</label>
             </div>
             <div class="input-group">
                 <input type="Password" name="password" id="Password" required />
                 <label for="Password">Password</label>
             </div>
             <input type="submit" value="Submit" name="submit" class="submit-btn">
            <label>Have an Account?</label>
            <a href="index.php" class="index">Login</a>
        </form>
        

    </div>
    
</body>
</html>