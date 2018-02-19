
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Feedback</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">Knowledge Management System</span></a></div>
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
							<h2 align="center"><font color="#FFFF00">Feedback</font></h2>
							
						</header>
						<div class="content">

<form method="post">
<table align="center"  cellspacing="10">
<tr>
<th>Name</th>
<td><input type="text" name="Name" placeholder="Enter your Name"></td>
</tr>
<tr>
<th>Email</th>
<td><input type="email" name="em" placeholder="Enter your Email id"></td>
</tr>
<tr>
<th>Phone no</th>
<td><input type="text" name="contact" placeholder="Enter your Phone no"></td>
</tr>
<tr>
<th>Comments</th>
<td><input type="text" name="comment" placeholder="Your Comments"></td>
</tr>
<tr>
<td><input type="submit" name="okay"  value="submit"></td>
</tr>
</table>
</form>
<?php
	if(isset($_POST['okay']))
{	
	$name =$_POST['Name'];
	$email =$_POST['em'];
	$contact =$_POST['contact'];
	$comment =$_POST['comment'];
	if(empty($name) or empty($email) or empty($connect) or empty($comment)){
		echo "<h1 style='color:red'>please filled the area</h1>";
	}else{
	$query_string = "INSERT INTO feedback VALUES('0','$name','$email','$contact','$comment')";
	$exec = mysqli_query($connect,$query_string)or die(mysqli_error($connect));
	
if($exec == 1)
	{
		?><script> alert ("THANKS FOR YOUR FEEDBACK...");
		window.location.href="home.php"</script><?php
	}
else{
	echo"<h1 style='color:red'>status upload failed</h1>";
}
	}
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