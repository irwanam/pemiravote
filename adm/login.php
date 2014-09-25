<div class="row spacer"></div>
<div class="row clearfix ">
	<div class="col-md-3 center">
		<form role="form" method="post">
			<div class="form-group">
				<label for="InputEmailLogin">Email address</label>
				<input type="email" class="form-control" id="InputEmailLogin" name="EmailLogin" placeholder="Enter email" required />
			</div>
			<div class="form-group">
				<label for="InputPasswordLogin">Password</label>
				<input type="password" class="form-control" id="InputPasswordLogin" name="PasswordLogin" placeholder="Password" required />
			</div>
			<div class="form-group">
				<input name="SubmitLogin" type="submit" class="btn btn-primary" value="Login" />
			</div>
		</form>
		<div class="form-group">
		<?php
			if(isset($_POST['SubmitLogin'])){
				if($_POST['SubmitLogin'])login($_POST['EmailLogin'],$_POST['PasswordLogin']);
			}
		?>
		</div>
	</div>
</div>		
