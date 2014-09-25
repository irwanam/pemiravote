<?php

	function getquery($sql) {
		global $CONFIG;
		$con=mysqli_connect($CONFIG['sql_host'],$CONFIG['sql_username'],$CONFIG['sql_password'],$CONFIG['sql_dbname']);
		$result = mysqli_query($con,$sql);
		mysqli_close($con);
		return $result;
	}
	
	function login($email,$password) {
		$sql="SELECT * FROM users WHERE email='$email' and password=md5('$password')";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_array($result)) {
				if(check_active_user($row['idusers'])==1){
					$_SESSION['idusers'] = $row['idusers'];
					header("location:index.php");
					exit;
				}
				else{
					echo msg_show('CHECK_EMAIL_ACT').$row['email'];
				}
			}
		}
		else {
			echo msg_show('LOGIN_FAILED');
		}
	}
	
	function logout() {
		session_destroy();
		session_unset($_SESSION['idusers']);
		header("location:index.php");
	}
	
	function check_active_user($idusers) {
		$sql="SELECT active FROM users WHERE idusers=$idusers";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_row($result)) {
				$active = $row[0];
			}
			return $active;
		}
		else {
			$active = 0;
			return $active;
		}
	}
	
	function check_group_user($idusers) {
		$sql="SELECT group FROM users WHERE idusers=$idusers";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_row($result)) {
				$active = $row[0];
			}
			return $active;
		}
		else {
			$active = 0;
			return $active;
		}
	}
	
	function msg_show($title) {
		global $CONFIG,$MSG;
		$show = $MSG[$CONFIG['language']][$title];
		return $show;
	}	
?>