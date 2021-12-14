<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
table, th, td {
  border: 2px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #FCF3CF;
}

</style>
</head>
<body background = "images/pastel.jpg">
<?php
    require('mydb.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($mycon, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mycon, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `user` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($mycon, $query) or die("could not connect to database");
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:login1.php");
        } else {
            echo "<div class='form'>
                  <center><h3>Incorrect Username/password <br>OR <br>You are not a Registered User.</h3><br>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p></center>
                  </div>";
        }
    } else {
?>
    <center><form class="form" method="post" name="login">
        <table>
        <tr><td><center><h1 class="login-title">Login</h1></center></td></tr>
        <tr><td><center><input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required /><br><br></center></td></tr>
        <tr><td><center><input type="password" class="login-input" name="password" placeholder="Password" required /><br><br></center></td></tr>
        <tr><td><center><input type="submit" value="Login" name="submit" class="login-button"/></center></td></tr>
        <tr><td><center><p class="link"><a href="registration.php">New Registration</a></p></center></td></tr>
        </table>
  </form>
  </center>
<?php
    }
?>
</body>
</html>