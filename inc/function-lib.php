<?php

	function get_majors_all() {
		$sql="SELECT * FROM majors order by idmajors_levels DESC";
		$userall = getquery($sql);
		if(mysqli_num_rows($userall)!=0){
			while($row = mysqli_fetch_array($userall)){
				$data[] = array(
					'idmajors' => $row['idmajors'],
					'idfaculty' => $row['idfaculty'],
					'majors_name' => $row['majors_name'],
					'majors_sname' => $row['majors_sname'],
					'idmajors_levels' => $row['idmajors_levels'],
					'last_update' => $row['last_update']				
				);
			}
		}
		else {
			$data[] = array(
				'idmajors' => 'null',
				'idfaculty' => 'null',
				'majors_name' => 'null',
				'majors_sname' => 'null',
				'idmajors_levels' => 'null'	,
				'last_update' => 'null'	 				
			);
		}
		return $data;
	}
	
	function define_majors_levels($majors_level) {
		$sql="SELECT level FROM majors_levels WHERE idmajors_levels=$majors_level";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_row($result)) {
				$level = $row[0];
			}
			return $level;
		}
		else {
			$level = 'null';
			return $level;
		}
	}
	
	function define_faculty_name($idfaculty) {
		$sql="SELECT faculty_name FROM faculty WHERE idfaculty=$idfaculty";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_row($result)) {
				$name = $row[0];
			}
			return $name;
		}
		else {
			$name = 'null';
			return $name;
		}
	}

	function define_faculty_sname($idfaculty) {
		$sql="SELECT faculty_sname FROM faculty WHERE idfaculty=$idfaculty";
		$result = getquery($sql);
		if(mysqli_num_rows($result)!=0){
			while($row = mysqli_fetch_row($result)) {
				$sname = $row[0];
			}
			return $sname;
		}
		else {
			$sname = 'null';
			return $sname;
		}
	}
	
	function compare($var1,$var2) {
		$result=0;
		if($var1==$var2)$result=1;
		return $result;
	}
	
	function register($email,$password1,$password2) {
		$password = md5($password1);
		$sql="INSERT INTO users (email,password) VALUES ('$email','$password')";
		if(check_email_exist($email)==0){
			if(compare($password1,$password2)==1){
				runquery($sql);
				msg_show('success','REG_SUCCESS','');
			}
			else{
				msg_show('danger','REG_PASS_FAIL','');
			}
		}
		else{
			msg_show('warning','REG_EMAIL_EXIST','');
		}
	}
	

?>