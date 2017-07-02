<?php
include ('index.php');

$stmt = $conn->prepare('insert into test (username, password) values (?,?)');
$stmt->bindValue(1, $_POST['username']);
$stmt->bindValue(2, $_POST['password']);
$stmt->execute();
header('Location: index.html');
