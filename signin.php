<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}
include ('index.php');
$user = htmlentities(trim($_POST['username']), ENT_QUOTES, "UTF-8");
$pass = htmlentities(trim($_POST['password']), ENT_QUOTES, "UTF-8");
$hash = password_hash($pass,  PASSWORD_DEFAULT);
$verify = password_verify($pass, $hash);
$stmt = $conn->prepare('select * from test where username = :email');
$stmt->bindParam(':email', $user);
$stmt->execute();
$count = $stmt->rowCount();
if($count == 1 && $verify){
  $_SESSION['email'] = $user;
  $_SESSION['success'] = "<h1>You Cracked the Code</h1>";
  header('location:main.php');
    $conn = null;
    exit;
}


?>
