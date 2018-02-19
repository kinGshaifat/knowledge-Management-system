
<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Books</title>
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

            <br>
            <br>
            
    <form>
	<input type="text" name="keyword" placeholder="search here......"><br>
	<input type="submit" name="searchBtn" value="search">
	</form>
    
    <?php 
if(isset ($_GET['searchBtn']))
{
	$keyword = $_GET['keyword'];
	if(!empty($keyword))
	{
		$searchLinker = mysqli_query($connect,"SELECT * FROM fileupload WHERE fname LIKE '%$keyword%'") or die(mysqli_error($connect));
		if(mysqli_num_rows($searchLinker)>0)
		{
			?><table cellpadding="5" cellspacing="0" border="1">
        	<thead>
        	<tr>
        	<th>sl no</th>
        	<th>filename</th>
            <th>download</th>
        	</tr>
        	</thead>
        	<tbody>
        	<?php
			$sl = 1;
			while($row = mysqli_fetch_array($searchLinker))
			{
			
				?>
            	<tr>
            	<td><?php echo $sl?></td>
            	<td><?php echo $row['fname']?></td>
                <td><a href="<?php echo $row['fpath']?>"target="_blank"><?php echo $row['fpath']?></a></td>
            	</tr>
            	<?php
				$sl++;
			}
			?>
        	</tbody>
        	</table>
        	<?php
		}
		else
		{
			echo 'no result found';
		}
	}
	else
	{
		echo "empty value found";
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