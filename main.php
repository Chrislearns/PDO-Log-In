<?php
if(session_status() == PHP_SESSION_NONE) {
  session_start();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<link rel="stylesheet" href="master.css">
</head>
<body>

<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">How to verify Password using PHP</h1>
    </header>
    <?php
          if (isset($_SESSION["success"]))

          {
              $success = $_SESSION["success"];
              echo "<h1>$success</h1>";
          }

          if (isset($_SESSION["error"]))

          {
              $error = $_SESSION["error"];
              echo "<h1>$error</h1>";
          }
    ?>
    <form class="form" method="post" action="verifypassword.php">
        <div class="form__group">
            <input type="text" placeholder="Username" name="username" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" placeholder="Password" name="password" class="form__input" />
        </div>

        <button class="btn" type="submit">Register</button>
    </form>
    <h4 id="joe" >UI credit <a href="https://codepen.io/dope/">Joe</a></h4>
</div>


 <!-- For lesson on working with CheckBox Arrays
     Ignore or Have Fun
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
  <br> -->
</body>

<?php
/*
// Fill in values and reload page to insert values into database.
//  Remember to remove comment tags LOL.
//   After initial use this section should be deleted so you won't run this query more then once.

include_once ('connection.php');


$username = 'drainc3';
$password = 'chrisdrain';
//Hash your password in order to verify it with password_verify
$hashedPassword = password_hash($password,  PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO verify (username, password) VALUES(?, ?)");

$stmt->execute(

      array(

          $username,
          $hashedPassword

        ));

$conn= null;
exit;
*/
 ?>

</html>
