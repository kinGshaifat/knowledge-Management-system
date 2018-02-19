
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Upload</title>
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
							<h2 align="center"><font color="#FF0000">Upload</font></h2>
						</header>
						<div class="content">
							<form method="post" enctype="multipart/form-data">
<table align="center">
	<tr>
    	<td>Description</td>
        <td><input type="text" name="caption" placeholder="Enter your caption here....."></td>
    </tr>
    <tr>
    	<td>Upload your File</td>
        <td><input type="file" name="file"></td>
    </tr>
    <tr>
    	<td><input type="submit" name="subMit" value="Upload"></td>
     </tr>
</table>
</form>
<?php 
if(isset($_POST['subMit'])){
	#normal text data
	$caption=$_POST['caption'];
	#file information
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	# check if file size exceed approx 2 mb
	if($file_size>16000000){
		echo "<h3 style='color:red'>File Size exceeding....!please upload a file less than 16 mb</h3>";
		}else{			#file size is ok
			#now check the file type
			if($file_type=="application/pdf" ){
				#file type is ok
				#now create destination folder /dir
				$dir="aplications";
				if(!file_exists($dir)){
					#if dir with name 'images' does not exists than a folder using mkdir function
					mkdir($dir);
					}
				#custom creation of the destination folder where the file will get saved under C:/wamp/www/fileuploading/images/......
		$destination_path=$dir.'/'.rand(0000,9999).'_'.$file_name;
		#upload the file from sourse to destination
		$upload=move_uploaded_file($_FILES['file']['tmp_name'],$destination_path) or die($_FILES['file']['error']);
		# the above funtion is inbuilt and it will basically move the copy file(tmp) to the destination folder
		#after upload done
		#save the information db table
		#valid 
		
		#save user details
		$_SESSION['user'];
		
		$save=mysqli_query($connect,"INSERT INTO fileupload VALUE('0','$file_name','$destination_path','$caption','$file_type','0','".$_SESSION['user']['id']."')") or die(mysqli_error($connect));
		# if save return 1 the data is saved
		if($save==1){
			echo"<h3 style='color:green'>File uploaded successfully</h3>";
			}
		}else{
			#file type is incorrect
			echo"<h3 style='color:red'>File should be pdf</h3>";
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