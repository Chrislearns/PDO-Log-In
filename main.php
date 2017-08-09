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
 <form action="test.php" method="post">
   <div class="input-spacing">
    <h3> Days Off(check all applicable boxes):</h3><br>
  <input type="checkbox" name="daysOff[]" value="Saturday" > Saturday
  <input type="checkbox" name="daysOff[]" value="Sunday" > Sunday
  <input type="checkbox" name="daysOff[]" value="Monday" > Monday
  <input type="checkbox" name="daysOff[]" value="Tuesday" > Tuesday
  <input type="checkbox" name="daysOff[]" value="Wednesday" > Wednesday
  <input type="checkbox" name="daysOff[]" value="Thursday" > Thursday
  <input type="checkbox" name="daysOff[]" value="Friday" > Friday
  <br>
  <input type="submit" value="Sign Up"/>
  </div>
</form>
 <br>
 <br>
 <?php
              if(isset($_SESSION["success"])) {
            $success = $_SESSION["success"];
             echo "<h1>$success</h1>";
                      }
        ?>
 <?php
              if(isset($_SESSION["empty"])) {
            $empty = $_SESSION["empty"];
             echo "<h1>$empty</h1>";
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
