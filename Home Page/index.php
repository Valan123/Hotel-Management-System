
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/png">
    <title>Hotel Luck</title>
</head>
<body>
    <div class="login-wrapper">
        <form action="login.php" class="form" method="post">
            <h1>Welcome</h1>
            <img src="logo.png" alt="">
            <div class="input-group">
                <input type="text" name="username" id="loginUser" required />
                 <label for="loginUser">User Name</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="loginPassword" required />
                <label for="loginPassword">Password</label>
            </div>
            <input type="submit" value="Login" class="submit-btn">
            <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
        </form>
        <div id="forgot-pw">
            <form action="" class="form">
                <a href="#" class="close">&times;</a>
                <h2>Reset Password</h2>
                <div class="input-group">
                    <input type="email" name="email" id="email" required>
                     <label for="email">Email</label>
                </div>
                <a href="<?php echo $row['id'];?>"><input type="submit"   value="Submit"  class="submit-btn" ></a>
            </form>
    </div>
</body>
</html>