<?php
require_once 'dbConnect.php';
session_start();
 	class dbFunction {
		  
		function __construct() {
			
			// connecting to database
			$db = new dbConnect();;
			 
		}
		// destructor
		function __destruct() {
			
		}
		public function UserRegister($username, $emailid, $rollnum, $mobile, $password){
			 	$password = ($password);
			 	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
				$qr = mysqli_query($conn,"INSERT INTO user(name, emailid, rollnumber, mobilenumber,  password) values('".$username."','".$emailid."','".$rollnum."','".$mobile."','".$password."')");
				return $qr;
			 
		}
		public function Login($emailid, $password){
			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
			$res = mysqli_query($conn,"SELECT * FROM user WHERE emailid = '$emailid' AND password = '$password'" );
			if(mysqli_error($conn))
			{
				print_r($conn);
			}
			$user_data = mysqli_fetch_array($res);
			//print_r($user_data);
			$no_rows = mysqli_num_rows($res);
			
			if ($no_rows == 1) 
			{
		 
				$_SESSION['login'] = true;
				$_SESSION['uid'] = $user_data['username'];
				$_SESSION['username'] = $user_data['name'];
				$_SESSION['email'] = $user_data['emailid'];
				$_SESSION['rollnum']= $user_data['rollnumber'];
				$_SESSION['mobnum']=$user_data['mobilenumber'];
				return TRUE;
			}
			else
			{
				return FALSE;
			}
			 
				 
		}
		public function isUserExist($emailid){
			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
			$qr = mysqli_query($conn,"SELECT * FROM user WHERE emailid = '".$emailid."'");
			if($qr){
				echo $row = mysqli_num_rows($qr);
			}
			else{
				$row=0;
			}
			if($row > 0){
				return true;
			} else {
				return false;
			}
		}
	}
?>