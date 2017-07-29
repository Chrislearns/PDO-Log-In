<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <p>Username and Password Required</p>
 <p>Enter your details to login:</p>
 <form action="test.php" method="POST">
 <label>Username</label>
 <input type="text" name="username" /><br>
 <label>Password</label>
 <input type="password" name="password" /><br>
 <input type="submit" value="Sign Up"/>
 </form>
 <br>
 <br>
 <?php
              if(isset($_SESSION["success"])) {
            $success = $_SESSION["success"];
             echo "<h1>$success</h1>";
                      }
        ?>
 <form action="signin.php" method="POST">
 <label>Username</label>
 <input type="text" name="username" /><br>
 <label>Password</label>
 <input type="password" name="password" /><br>
 <input type="submit" value="Sign In"/>
 </form>

</body>
</html>
