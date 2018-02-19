<?php include ('connection.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
<h1 align="center"><font color="#CC0000">Change Password</font></h1>
</head>

<body style="background-image:url(dawn.jpg)">
<?php  include('menu.php')?>
<form method="post">
<input type="hidden">
<table align="center">
<tr>
	<td>Old Password</td>
	<td><input type="password" name="oldpass" placeholder="Enter the Old Password" ><br></td> 
</tr>
<tr>
	<td>New Password</td>
	<td><input type="password" name="newpass" placeholder="Enter the New Password" ><br></td> 
</tr>
<tr>
	<td>Confirm Password</td>
	<td><input type="password" name="conpass" placeholder="Enter the New Password" ><br></td> 
</tr>
<tr>
	<td><input type='submit' name='ok' value='Save'></td>
</tr>
</table>
</form>
<?php 
#edit code here
if(isset($_POST['ok'])){
	
	$id=$_POST['id']; 
	$oldpass=$_POST['oldpass']; //$name is a string 'name' is html
	$newpass=$_POST['newpass'];
	$conpass=$_POST['conpass'];
	$query=mysqli_query($connect,"SELECT * FROM admin WHERE password='$oldpass'");

	if(mysqli_num_rows($query)==1){
		if($newpass==$conpass)
		{
			# update Query
          $query=mysqli_query($connect,"UPDATE admin SET password='$newpass' ") or die(mysqli_error($connect));
	       if($query==1){
		      ?><script> alert ('Update Success');
		      window.location.href='index.php';</script> <?php
		          }
		}else{ echo "<h3 style='color:red'>New password and Confirm password doesn't match</h3>";}
	}else{echo "<h3 style='color:red'>Old password doesn't exists<h3>";}
}
?>
</body>
</html>
