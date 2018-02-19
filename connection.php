<?php

# connection code
# start the session
session_start();
$host='localhost';
$username='id4779800_nilanjan';
$password='nilanjan123';
$dbname='id4779800_kms';


$connect=mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($connect));

//print_r($connect);



?>