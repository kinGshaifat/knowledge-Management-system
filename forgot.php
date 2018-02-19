
<!doctype html>
<html>
	<head>
		<title>Forgot Password</title>
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
            
<form method="post" >
<input type="hidden">
<table align="center" style="background-color:#CFF">
<tr>
<td style="color:green"><b>Enter your phone number</b></td>
<td><input type='text' name='phone' placeholder="Phone Number"></td>
</tr><br>
<tr>
	<td><input type='submit' name='okay' value='check'></td>
</tr>

</table>
</form>
<?php
if(isset($_POST['okay']))
{
	
	$phone = $_POST['phone'];
	$query = "SELECT * FROM user WHERE phone='$phone'";
	$exec = mysqli_query ($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($exec) == 1)
	{
		
		?><script> alert('phone number ok') ;window.location.href ="resetpassword.php";</script><?php		
		
	}
	else
	{
		?><script> alert('wrong number') ;window.location.href ="forgot.php";</script><?php
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


