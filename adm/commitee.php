<?php

?>
<div class="row clearfix">
	<div class="panel panel-default">
		<!-- Default panel contents -->
		<div class="panel-heading">Panitia</div>
		<div class="panel-body">
			<p>...</p>
		</div>
		<!-- Table -->
		<table class="table table-hover table-condensed table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>E-Mail</th>
					<th>Group</th>
					<th>Active</th>
					<th>Last Login</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$userall=get_users_all();
					foreach($userall as $row){
				?>
					<tr>
						<td><?php echo $row['idusers'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['group'];?></td>
						<td><?php echo $row['active'];?></td>
						<td><?php echo $row['last_login'];?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-danger btn-xs dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>