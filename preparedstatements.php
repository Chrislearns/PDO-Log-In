<?php
include ('index.php');

$stmt = $conn->prepare('select * from test where username like ?');
$name = 'chris';
// $name = array('chris','mysql', 'more');
// forEach($name as $names){
//$stmt->bindParam(1, $names)
//$stmt->execute();
//}
$stmt->bindParam(1, $name);
//$stmt->bindValue(1,'%f%');
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<h2>".htmlentities($row['username']). " ".htmlentities($row['password']) . "</h2>";
   // echo "<h2>". vardump[$row]. "</h2>";
};
