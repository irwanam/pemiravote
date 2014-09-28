<div class="container">
	<div class="row spacer"></div>
	<div class="row clearfix ">
		<div class="col-md-3 center">
			<form role="form" method="post" class="form-signin">
				<div class="form-group">
					<h2 class="form-signin-heading"><?php label_show('LOGIN_HERE'); ?></h2>
					<input type="email" class="form-control" id="InputEmailLogin" name="EmailLogin" placeholder="E-Mail" required >
					<input type="password" class="form-control" id="InputPasswordLogin" name="PasswordLogin" placeholder="Password" required >
					<input name="SubmitLogin" type="submit" class="btn btn-lg btn-primary btn-block" value="<?php label_show('SIGNIN'); ?>" >
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
</div>
