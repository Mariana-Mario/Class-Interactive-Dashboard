<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
table, th, td {
  border: 2px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #AED6F1;
}

</style>
</head>
<body background = "images/tech.jpg">
<?php
    require('mydb.php');   
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($mycon, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($mycon, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mycon, $password);
        $create_datetime = date("Y-m-d H:i:s");


    $sql_u = "SELECT * FROM user WHERE username='$username'";
    //$sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($mycon, $sql_u);
    //$res_e = mysqli_query($db, $sql_e);

    //$mysql = "SELECT * FROM user where username='$username'";
    //$myresult = mysqli_query($mycon,$mysql);
    //echo $myresult->num_rows;
    //echo $myresult->num_rows ."records"."<br>";
    if (mysqli_num_rows($res_u) > 0)                    
    {  
        //$name_error = "Sorry... username already taken";
        echo "<script language='javascript'>alert('You are already registered!');</script>";
        echo "<div class='form'>
                  <p class='link'>Click here to go back to the <a href='registration.php'>registration</a> page again.</p>
                  
                  </div>";
        //http_redirect(registration.php);                           
        //header("location: registration.php");
        //exit;
    }
        else
    {
        //$query = "INSERT INTO users (username, email, password) 
        //VALUES ('$username', '$email', '".md5($password)."')";
        //$results = mysqli_query($db, $query);                   
    //}               
                    
                
    $query = "INSERT into `user` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result = mysqli_query($mycon, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <p class='link'>Click here to <a href='registration.php'>registration</a>again.</p>
                  
                  </div>";
        }
    } 
}else {
?>
        <center> <form class="form" action="" method="post"><table>
         <tr><td><center><h1 class="login-title">Registration</h1></center></td></tr>
         <tr><td><center><input type="text" class="login-input" name="username" placeholder="Username" required /><br><br></center></td></tr>
         <tr><td><center><input type="email" class="login-input" name="email" placeholder="Email Adress" required /><br><br></center></td></tr>
         <tr><td><center><input type="password" class="login-input" name="password" placeholder="Password" required /><br><br></center></td></tr>
         <tr><td><center><input type="submit" name="submit" value="Register" class="login-button"></center></td></tr>
         <tr><td><center><p class="link"><a href="login.php">Click to Login</a></p></center></td></tr>
        </table></form></center>  
<?php
    }
?>

</body>
</html>