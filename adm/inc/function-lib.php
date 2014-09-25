<?php

	function getquery($sql) {
		global $CONFIG;
		$con=mysqli_connect($CONFIG['sql_host'],$CONFIG['sql_username'],$CONFIG['sql_password'],$CONFIG['sql_dbname']);
		$result = mysqli_query($con,$sql);
		mysqli_close($con);
		return $result;
	}
	
	function static_login($email,$password) {
		$sql="SELECT * FROM users WHERE email='$email' and password=md5('$password')";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			$_SESSION['idusers'] = "admin"; // buat session username.
			header("location:index.php"); // Re-direct ke index.php
			exit;
		}
		else {
			echo 'Login Failed';
		}
	}
	
	function logout() {
		session_destroy();
		session_unset($_SESSION['idusers']);
		header("location:index.php"); // Re-direct ke index.php
	}
	
?>