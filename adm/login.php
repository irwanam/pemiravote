<?php
	if(isset($_POST['SubmitLogin'])){
		if($_POST['SubmitLogin'])static_login($_POST['EmailLogin'],$_POST['PasswordLogin']);
	}
?>
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
			<input name="SubmitLogin" type="submit" class="btn btn-default pull-left" value="Login" />
		</form>
	</div>
</div>		
