<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db='resume';


try {

    $con= new PDO("mysql:host = $host; dbname=$db;",$user, $password);
} catch (Exception $e) {
    echo "connection faild<br>".$e;
}
 
?>