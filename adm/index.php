<?php
	include("./inc/function-lib.php");
	include("./inc/config.php");
	include("./inc/language.php");
	session_start();
	if(!isset($_SESSION['idusers'])){
		$pageviews['mainarea']="login.php";
	}
	else {
		if($_SESSION['role']>=1){
			$pageviews['mainarea']="panel.php";
			$pageviews['content']="dashboard.php";
		}
		else{
			header("location:../index.php");
		}
	}
	
	//Commitee
	$act = array('cstatus');
	if(isset($_GET['commitee'])){
		if(empty($_GET['commitee'])){
			$pageviews['content']="commitee.php";
		}
		else {
			foreach($act as $value){
				if($_GET['commitee']==$value){
					$action = $_GET['commitee'];
					if($action=='cstatus'&isset($_GET['uid']))update_users_status($_GET['uid']);
				}
			}
			$pageviews['content']="commitee.php";
		}
	}
	
	unset($act,$value,$action);
	//-------Commitee End-------------
	//Logout
	if(isset($_GET['logout']))logout();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php label_show('DASHBOARD');echo ' ‹ '.$CONFIG['title'].' | '.$CONFIG['organizations']; ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<?php
			if($pageviews['mainarea']=="panel.php")echo '<link rel="stylesheet" href="./css/panel-style.css">';
		?>
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include($pageviews["mainarea"]); ?>
		<footer>

		</footer>
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
	</body>
</html>