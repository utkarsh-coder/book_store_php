<?php

	require('includes/config.php');
			
			$con = mysqli_connect("localhost", "root", "root", "book_store");
			$query="delete from contact where con_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>