<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Change Profile</title>
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
			<?php include('menu.php');
			if(!empty($_SESSION['user'])){
	$id=$_SESSION['user']['id'];
$getPrevData= mysqli_query($connect,"SELECT * FROM user WHERE id='$id'");
if(mysqli_num_rows($getPrevData)==1){
	$row=mysqli_fetch_array($getPrevData);
	}
			?>
            

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
							<h2 align="center"><font color="#FF0000">Change Profile</font></h2>
						</header>
                        <form method="post"action="">
                        
<table align="center" style="background-color:#666">
<tr>
	<td><b>First Name</b>*</td>
	<td><input type='text' name="fname" placeholder='Enter your first name...'> </td><br>
</tr>
<tr>
<tr>
	<td><b>Middle Name</b>*</td>
	<td><input type='text' name="mname" placeholder='Enter your middle name...' ></td><br>
</tr>
<tr>
	<td><b>last Name</b>*</td>
	<td><input type='text' name="lname" placeholder='Enter your last name...' ></td><br>
</tr>
<tr>
	<td><b>Email</b>*</td>
	<td><input type='email' name="email" placeholder='Enter your Email Id...'> </td><br>
</tr>
<tr>
	<td><b>Password</b>*</td>
	<td><input type="password" name="password" placeholder="Enter 6 character password"><br></td>
</tr>
<tr>
	<td>Phone no.</td>
	<td><input type="text" name="phone" placeholder="Enter your mobile number"></td>
</tr>
<tr>
	<td><b>Gender</b>*</td>
	<td><select name="gender">
    <option value="">-- select one --</option>
  <option value="Male" style="color:black">Male</option>
  <option value="Female" style="color:black">Female</option>
  <option value="other" style="color:black">other</option>
  </option>
 </select></td>
</tr>
<tr>
	<td><b>Date of birth*</b></td>
	<td><input type="text" name="dob"></td>
</tr>
<tr>
	<td><b>About</b>*</td>
	<td><input type='text' name="about" placeholder='write something ...' </td><br>
</tr>
<tr>
	<td>occupation</td>
	<td><input type="text" name="occupation"></td>
</tr>
<tr>
	<td><b>Address</b>*</td>
	<td><textarea name="address" name="address" placeholder="Enter your address"></textarea></td><br>
</tr>
<tr>
	<td><b>choose a pic</b>*</td>
	<td><input type="file" name="profilepic"></td>
</tr>
<tr>
	<td><b>Security question</b>*</td>
    <td><select name="securityquestion">
    <option value="">-- select one --</option>
  <option value="nickname" style="color:black">My nick name</option>
  <option value="petname" style="color:black">My pet name</option>
  <option value="hobby" style="color:black">My hobby</option>
  </option>
 </select></td>
	</tr>
<tr>
	<td><b>Security Answer</b>*</td>
	<td><input type='text' name="securityanswer" placeholder='Enter your Answer...' </td><br>
</tr>
<tr>
	<td><input type='submit' name='ok' value='update'></td>
</tr>

</table>
</form>         
            <?php
#editing code             
			if(isset($_POST['ok']))
			{
				$id=$_SESSION['user']['id'];				
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$about=$_POST['about'];
		$occupation=$_POST['occupation'];
		$address=$_POST['address'];
		$profilepic=$_POST['profilepic'];
		$securityquestion=$_POST['securityquestion'];
		$securityanswer=$_POST['securityanswer'];
				 
				
# update Query
$query=mysqli_query($connect,"UPDATE user SET fname='$fname' ,mname='$mname' ,lname='$lname' , email='$email',password='$password', phone='$phone' ,gender='$gender',dob='$dob',about='$about',occupation='$occupation', address = '$address',profilepic='$profilepic',securityquestion='$securityquestion',securityanswer='$securityanswer' WHERE id='$id'") or die(mysqli_error($connect));
	if($query==1){
		?><script>alert('Update Success');
		window.location.href='home.php';</script> <?php
		}
	
            }

            ?>  
      <?php }?>   
           	</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
</div>
</footer>
</select>
<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
						
	</body>
</html>