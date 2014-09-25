<?php
	include("./inc/function-lib.php");
	include("./inc/config.php");
	include("./inc/language.php");
	session_start();
	if(!isset($_SESSION['idusers'])){
		$pageviews['mainarea']="login.php";
	}
	else {
		$pageviews['mainarea']="panel.php";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $CONFIG['title']; ?> | </title>
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
		<div class="container">
			<section>
				<div class="row clearfix">
					<div class="col-md-12">
						<?php include($pageviews["mainarea"]); ?>
					</div>
				</div>
			</section>
		</div>
		<footer>
			
		</footer>
		<script src="./js/jquery-1.11.1.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
	</body>
</html>