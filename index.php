<?php
try{
$conn = new PDO('mysql:host=localhost;dbname=grievanceInfo;charset=utf8;','root','');
}

catch(Exception $e) {
   echo "We have an error";
echo $e->getMessage();
    die();
}
