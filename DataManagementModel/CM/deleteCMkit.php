<?php  
	$connect = mysqli_connect("localhost", "root", "", "lrc");
	 $id=htmlspecialchars($_POST["id"]);
	 $id=mysqli_real_escape_string($connect,$id);
	$sql = "DELETE FROM cm_kit WHERE cm_kit_id  = '".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>