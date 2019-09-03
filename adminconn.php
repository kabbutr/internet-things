<?php
	$conn=mysqli_connect('localhost','root','','oit');
	if(!$conn)
	{
		echo $conn->error;
	}
?>