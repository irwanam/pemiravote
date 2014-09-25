<div class="row spacer"></div>
<div class="row clearfix ">
	<div class="col-md-3 center">
		<form role="form" method="post" class="form-signin">
			<div class="form-group">
				<h2 class="form-signin-heading">Login here</h2>
				<input type="email" class="form-control" id="InputEmailLogin" name="EmailLogin" placeholder="Enter email" required />
				<input type="password" class="form-control" id="InputPasswordLogin" name="PasswordLogin" placeholder="Password" required />
				<input name="SubmitLogin" type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In" />
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
