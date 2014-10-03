<div class="spacer"></div>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide" id="carousel-splash">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-splash">
					</li>
					<li data-slide-to="1" data-target="#carousel-splash">
					</li>
					<li data-slide-to="2" data-target="#carousel-splash">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="assets/img/jumbotron1.jpg" />
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="assets/img/jumbotron2.jpg" />
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="" src="assets/img/jumbotron3.jpg" />
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-splash" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-splash" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
	<div class="row clearfix">
		<div class="col-md-8 column">
			<blockquote class="pull-right">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
		</div>
		<div class="col-md-4 column">
			<form method="post" class="form-horizontal" role="form">
				<div class="col-sm-12 form-group">
					<div class="input-group">
					  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					  <input type="email" class="form-control" placeholder="<?php label_show('EMAIL'); ?>" name="EmailLogin" required>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
					  <span class="input-group-addon"><span class="glyphicon glyphicon-certificate"></span></span>
					  <input type="password" class="form-control" placeholder="<?php label_show('PASSWORD'); ?>" name="PasswordLogin" required>
					</div>
				</div>
				<div class="col-sm-12 form-group ">
					<div class="btn-group pull-right">
					  <input type="submit" class="btn btn-primary" value="<?php label_show('SIGNIN'); ?>" name="SubmitLogin"/>
					  <a class="btn-group" href="#modal-container-signup" id="modal-signup" data-toggle="modal" ><button type="button" class="btn btn-default"><?php label_show('SIGNUP'); ?></button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['SubmitLogin'])){
		if($_POST['SubmitLogin'])login($_POST['EmailLogin'],$_POST['PasswordLogin']);
	}
	include('register.php');
?>