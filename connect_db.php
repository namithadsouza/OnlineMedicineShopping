<?php
	$link=mysqli_connect("localhost","root","","medicare");
	if(mysqli_connect_error())
	{
		echo "Connection error".mysqli_connect_error();
		exit;
	}
	
?>

