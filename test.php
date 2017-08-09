<?php
if(session_status() == PHP_SESSION_NONE){
  session_start();
}
include ('index.php');

//Working with checkbox Arrays
$daysOff = $_POST['daysOff'];

$firstdayOff = htmlentities(trim($daysOff[0]),ENT_QUOTES, "UTF-8");
$secondDayOff = htmlentities(trim($daysOff[1]),ENT_QUOTES, "UTF-8");

$stmt = $conn->prepare("insert into checkbox (firstdayOff, secondDayOff) values(?,?)");
$stmt->bindValue(1, $firstdayOff);
$stmt->bindValue(2, $secondDayOff);
$stmt->execute();

$counter= $stmt->rowCount();
if($counter == 1){
  $_SESSION["success"] "<h1>You're a Badass</h1>";
  header("location:main.php");
  $conn = null;
  exit;
}


$user = htmlentities(trim($_POST['username']), ENT_QUOTES, "UTF-8");
$pass = htmlentities(trim($_POST['password']), ENT_QUOTES, "UTF-8");
$hash = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare('insert into test (username, password) values (?,?)');
$stmt->bindValue(1, $user);
$stmt->bindValue(2, $hash);
$stmt->execute();

$count = $stmt->rowCount();
if($count == 1){
  $_SESSION['success'] = "<h1>YOU SIGNED UP</h1>";
  header('location:main.php');
    $conn = null;
  exit;


}
