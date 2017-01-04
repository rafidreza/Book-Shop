<?php
require('includes/config.php');

			$query="delete from shipping_details where id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:view_order.php");

?>