
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>LOG IN</title>
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


		<!-- Content -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2 align="center"><mark><ins>Log in</ins></mark></h2>
							
						</header>
						<div class="content">
							<form method='post'>

<table>
<tr>
<td style="color:#603"><b>Email</b></td>
<td><input type="email" name="email" placeholder="enter email here.."></td>
</tr>
<tr>
<td><b>Password</b></td>
<td><input type="password" name="password" placeholder="enter password here.."></td>
</tr>
<tr>
<td><input type="submit" name="login" value="login"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	#check if email and password exists in DB ->table
	$checkstr="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$checklinkexec=mysqli_query($connect,$checkstr) or die(mysqli_error($connect));
	#verify if any row matches with the above details
	if(mysqli_num_rows($checklinkexec)==1){
		#valid
		$userdata=mysqli_fetch_array($checklinkexec);
		#save user detais
		$_SESSION['user']= $userdata;
		#redirect the user to home page
		header('location:home.php');
	}else{
		echo "<h3 style='color:red'>invalid user.please check ur email and password</h3>";
	}
}
?>
<tr>
<td>
<a href="forgot.php">Forget Password</a></td></tr>
<td><p><b>N.B- if you are not a registerd user,kindly signup or register with this link<a href="signup.php">Click Here</a></p></td>
</tr>
						</div>
						
					</article>
				</div>
			</section>

		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            

	</body>
</html>