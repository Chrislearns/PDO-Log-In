<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}
include_once ('connection.php');

/*.....Never Trust User Input....Get used to security checking........*/
$username = htmlentities(trim($_POST['username']), ENT_QUOTES, "UTF-8");
$password = htmlentities(trim($_POST['password']), ENT_QUOTES, "UTF-8");


/*..........Check if user and password combination exist...........*/
$stmt = $conn->prepare('select * from your-table-name-here where username = :username');
$stmt->bindParam(':username', $username);

$stmt->execute();

/*...........Take results and put them into an associative array....*/
$results = $stmt->fetch(PDO::FETCH_ASSOC);
$dbpassword = $results['PASSWORD'];

//Verify user password and number of rows affected
$verify = password_verify($password, $dbpassword);

/*.........Make sure theres only one result in your Database..............*/
$count = $stmt->rowCount();

if ($count == 1 && $verify) {

  /*.....Upon success use sessions to show that you were successful......*/
  $_SESSION['success'] = "<h1>You Cracked the Code</h1>";

  header('location:main.php');
    $conn = null;
    exit;
}
else {
  /*.........Error checking just in case.......*/
  $_SESSION["error"] = "We have a problem.";
  header('location:main.php');
  $conn = null;
  exit;

}
