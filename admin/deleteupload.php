<?php include('connection.php');

if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$delete_query_string = "DELETE FROM fileupload WHERE id = '$id'";
	$exec=mysqli_query($connect,$delete_query_string) or die(mysqli_error($connect));
	if($exec == 1){
		//header('location:user.php?delete=success');
		?><script> alert('Delete Success');window.location.href="upload.php";</script>
		
		<?php
		}
}?>