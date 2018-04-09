<?php
	$conn = mysqli_connect('localhost', 'root', '', 'blog');
	if(mysqli_connect_errno()){
		//
		echo 'failed'.mysqli_connect_errno();
	}
?>