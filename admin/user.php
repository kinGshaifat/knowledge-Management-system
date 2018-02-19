<?php include('connection.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View User</title>
<h1 align="center"><font color="#FF0000">USER LIST</font></h1>
</head>

<body background="dawn.jpg">
<?php include('menu.php') ?>
<form >
<table align="center">
<tr>
<td><input type="text" name="keyword" placeholder="Search Here....."><br></td>
<td><input type="submit" name="searchBtn" value="Search"></td>
</tr>
</table>

</form>
<?php 
if(isset($_GET['searchBtn'])){
	$keyword = $_GET['keyword'];
	if(!empty($keyword)){
	#query  for searching
	$searchLinker = mysqli_query($connect,"SELECT * FROM user WHERE fname LIKE'%$keyword%'") or die(mysqli_error($connect));
	if(mysqli_num_rows($searchLinker)>0){
		
	
?>
		<table cellpadding="5" cellspacing="0" border="1">
        <thead>
        	<tr>
            	<th> Sl no</th>
                <th> First Name</th>
                <th> Middle Name</th>
                <th> Last Name</th>
                <th> Email</th>
                <th> Phone NO</th>
                <th> Password</th>
                <th> Address</th>
                <th> DOB</th>
                <th> Gender</th>
                <th> About</th>
                <th> Occupation</th>
                <th> Profile Pic</th>
                <th>Sequrity Question </th>
                <th> Sequrity Answer</th>
                <th>Delete</th>
             </tr>
             </thead>
			<tbody>
<?php 
				$s1=1;
				while($row= mysqli_fetch_array($searchLinker)){?>
				<tr>
                	<td><?php echo $s1?></td>
        			<td><?php echo $row['fname'] ?></td>
            		<td><?php echo $row['mname'] ?></td>
            		<td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['Phone_no'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['about'] ?></td>
                    <td><?php echo $row['occupation'] ?></td>
                    <td><a href="../<?php echo $each_status['profilepic']?>" target="_blank"><img src="../<?php echo $each_status['profilepic']?>" width="80" height="80"></a></td>
                    <td><?php echo $row['Sequrity_question'] ?></td>
                    <td><?php echo $row['Sequerity_answer'] ?></td>
                    <td><a href="deleteuser.php?id=<?php echo $each_status['id']?>&delete=1&myname=bijoy" onClick="return confirm('Are you wish to delete Mr/Ms.<?php echo $each_status['email']?>')"><img src="Delete.png" width="40" height="40"><?php ?></a></td>
            	</tr>
            	<?php
					$s1++;
		}?>
  </tbody>
  </table><?php
  }else{
	  echo 'No result found';
  }
}else{
	echo 'Empty value found';
	}
}
?>
<?php
#view code
$query="SELECT * FROM user";//user is table name of database
$exec =mysqli_query($connect,$query) or die(mysqli_error($connect));
//print_r($exec);
# mysqli_num_rows is a inbuilt php func to check the number of rows found in that table, this function will return the number of rows found
if(mysqli_num_rows($exec)>0){
	echo "no of rows found =".mysqli_num_rows($exec);
	?><table align="center" cellpadding="5" border="1" cellspacing="0">
       <thead>
       <tr>
       		<th> Sl no</th>
            <th> First Name</th>
            <th> Middle Name</th>
            <th> Last Name</th>
             <th> Email</th>
             <th> Phone NO</th>
             <th> Password</th>
             <th> Address</th>
             <th> DOB</th>
             <th> Gender</th>
             <th> About</th>
             <th> Occupation</th>
             <th> Profile Pic</th>
             <th>Sequrity Question </th>
             <th> Sequrity Answer</th>
            <th>Delete</th>
       </tr>
       </thead>
       <tbody>
       <?php while($each_status= mysqli_fetch_array($exec)){?>
       				<tr>
                	<td><?php echo $each_status['id']?></td>
        			<td><?php echo $each_status['fname'] ?></td>
            		<td><?php echo $each_status['mname'] ?></td>
            		<td><?php echo $each_status['lname'] ?></td>
                    <td><?php echo $each_status['email'] ?></td>
                    <td><?php echo $each_status['Phone_no'] ?></td>
                    <td><?php echo $each_status['password'] ?></td>
                    <td><?php echo $each_status['address'] ?></td>
                    <td><?php echo $each_status['dob'] ?></td>
                    <td><?php echo $each_status['gender'] ?></td>
                    <td><?php echo $each_status['about'] ?></td>
                    <td><?php echo $each_status['occupation'] ?></td>
                    <td><a href="../<?php echo $each_status['profilepic'] ?>" target="_blank"><img src="../<?php echo $each_status['profilepic']?>" width="80" height="80"></td>
                    <td><?php echo $each_status['Sequrity_question'] ?></td>
                    <td><?php echo $each_status['Sequrity_answer'] ?></td>
                    <td><a href="deleteuser.php?id=<?php echo $each_status['id']?>&delete=1&myname=bijoy" onClick="return confirm('Are you wish to delete Mr/Ms.<?php echo $each_status['email']?>')"><img src="Delete.png" width="40" height="40"><?php ?></a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table><?php

    }else{
		echo "No Data found";
		}
	
?>
</body>
</html>