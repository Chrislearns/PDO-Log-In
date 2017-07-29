<?php
if (session_status() == PHP_SESSION_NONE){
session_start();
}
include ('index.php');

$stmt = $conn->prepare('select * from test where username = :username');
$name = 'chris';

$stmt->bindParam(':username', $name);
//Optional PDO::Param_STR $stmt->bindValue(':username', $name, PDO::PARAM_STR);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>".htmlentities($row['username']). " ".htmlentities($row['password']) . "</h2>";
   // echo "<h2>". vardump[$row]. "</h2>";
};
