<?php

# connection code
# start the session
session_start();
$host='localhost';
$username='root';
$password='';
$dbname='kms';


$connect=mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($connect));

//print_r($connect);



?>