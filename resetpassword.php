<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Reset Password</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Knowledge Management System</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php include('menu.php') ?>
<form method="post">
<input type="hidden" name="id">
<table align="center">
	<tr>
    	<th>New Password</th>
        <td><input type="password" name="newpass" placeholder="Enter new password"></td>
    </tr>
    <tr>
    	<th>Confirm Password</th>
        <td><input type="password" name="conpass" placeholder="Re-Enter your password"></td>
    </tr>
    <tr>
    	<td><input type="submit" name="okay" value="save"></td>
    </tr>
</table>
</form>
<?php
if(isset($_POST['okay']))
{
	
	$newpass = $_POST['newpass'];
	$conpass = $_POST['conpass'];
	if($newpass == $conpass)
	{
		$query = mysqli_query($connect,"UPDATE user SET password='$conpass'") or die(mysqli_error($connect));
		if($query == 1)
		{
			?><script> alert('password changed') ;window.location.href ="login.php";</script><?php
		
		}
		else
		{
			?><script> alert('wrong password') ;window.location.href ="resetpassword.php";</script><?php
		}
	}
}
?>    

<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>
