<?php
include_ ('connection.php');

$stmt = $conn->prepare('select * from test where username like ?');
$name = 'chris';


$stmt->bindParam(1, $name);


$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>".htmlentities($row['username']). " ".htmlentities($row['password']) . "</h2>";
   // echo "<h2>". vardump[$row]. "</h2>";
};
