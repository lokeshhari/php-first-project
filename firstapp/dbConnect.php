<?php
	class dbConnect {
		function __construct() {
			require_once('config.php');
  
     		// Create a connection 
     		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
			 mysqli_select_db($conn,DB_DATABASE );
			if(!$conn)
			{
				die ("Cannot connect to the database");
			} 
			return $conn;
		}
	} 
?>