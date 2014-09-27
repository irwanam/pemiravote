<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php echo $CONFIG['title'];?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="?">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php menu_show('USERS');?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header"><?php menu_show('COMMITEE');?></li>
						<li><a href="?commitee"><?php menu_show('COMMITEE_ALL');?></a></li>
						<li><a href="#"><?php menu_show('COMMITEE_ADD');?></a></li>
						<li class="divider"></li>
						<li class="dropdown-header"><?php menu_show('VOTERS');?></li>
						<li><a href="#"><?php menu_show('VOTERS_ALL');?></a></li>
						<li><a href="#"><?php menu_show('VOTERS_ADD');?></a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header"><?php echo get_user_info($_SESSION['idusers'],'email');?></li>
						<li class="divider"></li>
						<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Profile</a></li>
						<li><a href="?logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
<div class="container">
	<div class="col-md-9">
		<?php include($pageviews['content']);?>
	</div>
	<div class="col-md-3">
	
	</div>
</div> <!-- /container -->

