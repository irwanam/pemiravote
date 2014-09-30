<?php

	function getquery($sql) {
		global $CONFIG;
		$con=mysqli_connect($CONFIG['sql_host'],$CONFIG['sql_username'],$CONFIG['sql_password'],$CONFIG['sql_dbname']);
		$result = mysqli_query($con,$sql);
		mysqli_close($con);
		return $result;
	}
	
	function runquery($sql) {
		global $CONFIG;
		$con=mysqli_connect($CONFIG['sql_host'],$CONFIG['sql_username'],$CONFIG['sql_password'],$CONFIG['sql_dbname']);
		mysqli_query($con,$sql);
		mysqli_close($con);
	}
	
	function login($email,$password) {
		$sql="SELECT * FROM users WHERE email='$email' and password=md5('$password')";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_array($result)) {
				if(check_active_user($row['idusers'])==1){
					update_last_login($row['idusers']);
					$_SESSION['idusers'] = $row['idusers'];
					header("location:index.php");
					exit;
				}
				else{
					msg_show('warning','CHECK_EMAIL_ACT','').$row['email'];
				}
			}
		}
		else {
			msg_show('danger','LOGIN_FAILED','');
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
	
	function check_user_active($idusers) {
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
	
	function update_last_login($idusers) {
		$sql="UPDATE users set last_login=CURRENT_TIMESTAMP where idusers=$idusers";
		runquery($sql);
	}
	
	function get_users_info($idusers,$var) {
		$sql="SELECT * FROM users INNER JOIN users_detail ON users.idusers=$idusers";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_array($result)) {
				$data = $row[$var];
			}
			return $data;
		}
		else {
			$data = "failed";
			return $data;
		}		
	}
	
	function get_commitee_all() {
		$sql="SELECT * FROM users where role >= 1";
		$userall = getquery($sql);
		if(mysqli_num_rows($userall)!=0){
			while($row = mysqli_fetch_array($userall)){
				$data[] = array(
					'idusers' => $row['idusers'],
					'email' => $row['email'],
					'password' => $row['password'],
					'role' => $row['role'],
					'active' => $row['active'],
					'vote_point' => $row['vote_point'],
					'last_login' => $row['last_login'],					
					'last_update' => $row['last_update']					
				);
			}
		}
		else {
			$data[] = array(
				'idusers' => 'null',
				'email' => 'null',
				'password' => 'null',
				'role' => -1,
				'active' => -1,
				'vote' => -1,
				'last_login' => 'null',					
				'last_update' => 'null'					
			);
		}
		return $data;
	}
	
	function get_users_details($idusers) {
		$sql="SELECT * FROM users_detail where idusers=$idusers";
		$userall = getquery($sql);
		if(mysqli_num_rows($userall)!=0){
			while($row = mysqli_fetch_array($userall)){
				$data[] = array(
					'idusers' => $row['idusers'],
					'name' => $row['name'],
					'nim' => $row['nim'],
					'idmajors' => $row['idmajors'],
					'ipk' => $row['ipk'],
					'lecturer' => $row['lecturer'],
					'last_update' => $row['last_update']					
				);
			}
		}
		else {
			$data[] = array(
				'name' => 'null',
				'nim' => 'null',
				'idmajors' => 'null',
				'ipk' => 'null',
				'lecturer' => 'null',
				'last_update' => 'null'					
			);
		}
		return $data;
	}
	
	function define_users_role($role) {
		global $CONFIG,$UROLE;
		return $UROLE[$CONFIG['language']][$role];
	}
	
	function define_users_active($active) {
		global $CONFIG,$UACTIVE;
		return $UACTIVE[$CONFIG['language']][$active];
	}
	
	function msg_show($type,$title,$link) {
		global $CONFIG,$MSG;
		$show = $MSG[$CONFIG['language']][$title];
		echo	'<div class="alert alert-dismissable alert-'.$type.'">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					'.$show.'<a href="#" class="alert-link">'.$link.'</a>
				</div>';
	}
	
	function menu_show($title) {
		global $CONFIG,$MENU;
		$show = $MENU[$CONFIG['language']][$title];
		echo $show;
	}
	
	function label_show($title) {
		global $CONFIG,$LABEL;
		$show = $LABEL[$CONFIG['language']][$title];
		echo $show;
	}
	
?>