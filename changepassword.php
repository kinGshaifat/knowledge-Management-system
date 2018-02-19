
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Change Password</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="home.php">Knowledge Management System</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<?php include('menu.php')?>


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
							<h2 align="center"><font color="#FF0000">Change Password</font></h2>
						</header>
						<div class="content">
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
	$query=mysqli_query($connect,"SELECT * FROM user WHERE password='$oldpass'");

	if(mysqli_num_rows($query)==1){
		if($newpass==$conpass)
		{
			# update Query
          $query=mysqli_query($connect,"UPDATE user SET password='$newpass' ") or die(mysqli_error($connect));
	       if($query==1){
		      ?><script> alert ('Update Success');
		      window.location.href='index.php';</script> <?php
		          }
		}else{ echo "<h3 style='color:red'>New password and Confirm password doesn't match</h3>";}
	}else{echo "<h3 style='color:red'>Old password doesn't exists<h3>";}
}
?>
						</div>
						<footer>
							
						</footer>
					</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Me</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<div class="copyright">
						
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>