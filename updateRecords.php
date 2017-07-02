<?php
include ('index.php');

//$stmt = $conn->prepare('delet from test where username = :username');
$stmt= $conn->prepare('update test set password = :password where username = :username');
$stmt->bindValue(':username', $_POST['username']);
$stmt->bindValue(':password', $_POST['password']);
//$stmt->bindParam(1, $_POST['username']);
//$stmt->bindParam(2, $_POST['password']);
$stmt->execute();
header('Location: index.html');
