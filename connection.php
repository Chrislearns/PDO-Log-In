<?php
try{
$conn = new PDO('mysql:host=localhost;dbname=verifypassword;charset=utf8;','root','');
}
#Should not show because of .gitignore
catch(Exception $e) {
   echo "We have an error";
echo $e->getMessage();
    die();
}
