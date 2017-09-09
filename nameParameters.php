<?php
if (session_status() == PHP_SESSION_NONE){
session_start();
}
include ('index.php');

$stmt = $conn->prepare('select * from test where username = :username');

$name = 'chris';

$stmt->bindParam(':username', $name);

$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>".htmlentities($row['username']). " ".htmlentities($row['password']) . "</h2>";
};
