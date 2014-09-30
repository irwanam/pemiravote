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
						<img alt="" src="http://lorempixel.com/1600/500/sports/1" />
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
						<img alt="" src="http://lorempixel.com/1600/500/sports/2" />
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
						<img alt="" src="http://lorempixel.com/1600/500/sports/3" />
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
			<form class="form-horizontal" role="form">
				<div class="col-sm-12 form-group">
					<div class="input-group">
					  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
					  <input type="email" class="form-control" placeholder="email" required>
					</div>
				</div>
				<div class="col-sm-12 form-group">
					<div class="input-group">
					  <span class="input-group-addon"><span class="glyphicon glyphicon-certificate"></span></span>
					  <input type="password" class="form-control" placeholder="password" required>
					</div>
				</div>
				<div class="col-sm-12 form-group ">
					<div class="btn-group pull-right">
					  <button type="button" class="btn btn-primary">Sign In</button>
					  <a class="btn-group" href="#modal-container-signup" id="modal-signup" data-toggle="modal" ><button type="button" class="btn btn-default">Sign Up</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-container-signup" role="dialog" aria-labelledby="signup-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="signup-modal">
					Register Form
				</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="InputEmail">Email address</label><input type="email" class="form-control" id="InputEmail" required/>
					</div>
					<div class="form-group">
						<label for="InputPassword1">Password</label><input type="password" class="form-control" id="InputPassword1" required/>
					</div>
					<div class="form-group">
						<label for="InputPassword2">Re-enter Password</label><input type="password" class="form-control" id="InputPassword2" required/>
					</div>
					<div class="form-group">
						<label for="InputMajors">Jurusan</label>
						<select class="form-control" id="InputMajors" required>
							<option value="">-Pilih Jurusan-</option>
							<?php
								$majorlist = get_majors_all();
								foreach($majorlist as $data_majors){
									echo '<option value='.$data_majors["idmajors"].'>'.define_faculty_sname($data_majors["idfaculty"]).' / '.$data_majors["majors_name"].' - '.define_majors_levels($data_majors["idmajors_levels"]).'</option>';
								}
							?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="modal-footer">
				 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
		
	</div>	
</div>