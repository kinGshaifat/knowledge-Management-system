<?php

# connection code
# start the session
session_start();
$host='localhost';
$username='id4786261_shaifat';
$password='shaifat12';
$dbname='id4786261_kms';


$connect=mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($connect));

//print_r($connect);



?>