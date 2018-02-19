<?php include('connection.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Feedback</title>
<h1 align="center"><font color="#FF0000">FeedBack</font></h1>
</head>

<body background="dawn.jpg">
<?php include('menu.php')?>
<?php 
#view code
$query="SELECT * FROM feedback";//feedback is table name of database
$exec =mysqli_query($connect,$query) or die(mysqli_error($connect));
//print_r($exec);
# mysqli_num_rows is a inbuilt php func to check the number of rows found in that table, this function will return the number of rows found
if(mysqli_num_rows($exec)>0){
	echo "no of rows found =".mysqli_num_rows($exec);
	?><table align="center" cellpadding="5" border="1" cellspacing="0">
       <thead>
       <tr>
       		<th> Sl no</th>
            <th> Name</th>
             <th> Email</th>
             <th> Phone No</th>
             <th> Comment</th>
            <th>Delete</th>
       </tr>
       </thead>
       <tbody>
       <?php while($each_status= mysqli_fetch_array($exec)){?>
       				<tr>
                	<td><?php echo $each_status['id']?></td>
        			<td><?php echo $each_status['name'] ?></td>
                    <td><?php echo $each_status['email'] ?></td>
                    <td><?php echo $each_status['contact'] ?></td>
                    <td><?php echo $each_status['comment'] ?></td>
                    <td><a href="deletefeedback.php?id=<?php echo $each_status['id']?>&delete=1&myname=bijoy" onClick="return confirm('Are you wish to delete Mr/Ms.<?php echo $each_status['email']?>')"><img src="Delete.png" width="40" height="40"><?php ?></a></td>
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