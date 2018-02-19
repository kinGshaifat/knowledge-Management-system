
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sign Up</title>
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
							<h2 align="center" style="color:green"><mark><i>Create a new account </i></mark></h2>
							
						</header>
						<form method="post" action=" " enctype="multipart/form-data">
<table align="center" style="background-color:#666">
<tr>
	<td><b>First Name</b>*</td>
	<td><input type='text' name="fname" placeholder='Enter your first name...' </td><br>
</tr>
<tr>
<tr>
	<td><b>Middle Name</b></td>
	<td><input type='text' name="mname" placeholder='Enter your middle name...' </td><br>
</tr>
<tr>
	<td><b>last Name</b>*</td>
	<td><input type='text' name="lname" placeholder='Enter your last name...' </td><br>
</tr>
<tr>
	<td><b>Email</b>*</td>
	<td><input type='email' name="email" placeholder='Enter your Email Id...' </td><br>
</tr>
<tr>
	<td><b>Password</b>*</td>
	<td><input type="password" name="password" placeholder="Enter 6 character password"><br></td>
</tr>
<tr>
	<td><b>Phone no.</b>*</td>
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
	<td><input type="date" name="dob"></td>
</tr>
<tr>
	<td><b>About</b>*</td>
	<td><input type='text' name="about" placeholder='write something ...' </td><br>
</tr>
<tr>
	<td><b>Occupation</b></td>
	<td><input type="text" name="occupation"></td>
</tr>
<tr>
	<td><b>Address</b>*</td>
	<td><textarea name="address" name="address" placeholder="Enter your address"></textarea></td><br>
</tr>
<tr>
	<td><b>Choose a pic</b>*</td>
	<td><input type="file" name="file"></td>
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
	<td><input type='text' name="securityanswer" placeholder='Enter your Answer...' ></td><br>
</tr>
<tr>
	<td><input type='submit' name='ok' value='Sign up'></td>
</tr>

</table>
</form>
<p align="center" style="color:red"><b>N/A- "The * mark area should be fulfilled by new user"</b></p><br>
<?php
	if(isset($_POST['ok'])){
		#verify email id
		$email=$_POST['email'];
		#query to cheack  if email already exists
		$query="SELECT * FROM user WHERE email='$email'";
		$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
		#check if any rows found
		if(mysqli_num_rows($exec)==1){
			echo"<h3 style='color:red'>Email already exists</h3>";
			}else{
		
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
		
		$securityquestion=$_POST['securityquestion'];
		$securityanswer=$_POST['securityanswer'];
		#file information
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	# check if file size exceed approx 2 mb
	if($file_size>2000000){
		echo "<h3 style='color:red'>File Size exceeding....!please upload a file less than 2 mb</h3>";
		}else{
			#file size is ok
			#now check the file type
			if($file_type=="image/png" or $file_type=="image/jpg" or $file_type=="image/jpeg" or $file_type=="image/JPG" or $file_type=="image/PNG" or $file_type=="image/JPEG" or $file_type=="image/gif"){
				#file type is ok
				#now create destination folder /dir
				$dir="images";
				if(!file_exists($dir)){
					#if dir with name 'images' does not exists than a folder using mkdir function
					mkdir($dir);
					}
				#custom creation of the destination folder where the file will get saved under C:/wamp/www/fileuploading/images/......
		$destination_path=$dir.'/'.rand(0000,9999).'_'.$file_name;
		#upload the file from sourse to destination
		$upload=move_uploaded_file($_FILES['file']['tmp_name'],$destination_path) or die($_FILES['file']['error']);
		# the above funtion is inbuilt and it will basically move the copy file(tmp) to the destination folder
			}
		}
		
		
			
			
}
if(empty($fname) or empty($lname) or empty($address) or empty($dob) or empty($gender) or empty($about) or empty($destination_path) or empty($securityquestion) or empty($securityanswer) or empty($phone) or empty($email) or empty($password)){
		?><script>alert( "please filled the area");
		window.location.href="signup.php"</script><?php
	}else{

		#creating for sql command string
		$query_string="INSERT INTO user VALUES('0','$email','$password','$fname','$mname','$lname','$address','$dob','$gender','$about','$occupation','$destination_path','$securityquestion','$securityanswer','$phone')";//signup is table name of database
		#Execution of Sql command
		$exec=mysqli_query($connect,$query_string) or die(mysqli_error($connect));
		$string="SELECT * FROM user WHERE email='$email'";
			if($exec == 1){
				$_SESSION['user']['fname'] = $fname;
				if($email== $string){
					echo "<h1 style='color:red'>You are not signed</h1>";
				}else{ 
				  ?><script> alert('You are successfully registered');
					window.location.href='home.php';</script> <?php
			}	
	}
			}
	
	}
?>
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