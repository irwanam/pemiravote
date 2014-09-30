<?php
 
?>
<div class="modal fade" id="modal-container-signup" role="dialog" aria-labelledby="signup-modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="signup-modal">
					<?php label_show('REG_FORM'); ?>
				</h4>
			</div>
			<div class="modal-body">
				<form method="post" role="form" autocomplete="on">
					<div class="form-group">
						<label for="InputEmail"><?php label_show('EMAIL'); ?></label><input type="email" class="form-control" id="InputEmail" id="Email" required/>
					</div>
					<div class="form-group">
						<label for="InputPassword1"><?php label_show('PASSWORD'); ?></label><input type="password" class="form-control" id="InputPassword1" id="Password1" required/>
					</div>
					<div class="form-group">
						<label for="InputPassword2"><?php label_show('REPASSWORD'); ?></label><input type="password" class="form-control" id="InputPassword2" id="Password2" required/>
					</div>			
					<button type="submit" class="btn btn-success"><?php label_show('REGISTER'); ?></button>
				</form>
			</div>
			<div class="modal-footer">
				 <button type="button" class="btn btn-danger" data-dismiss="modal"><?php label_show('CANCEL'); ?></button>
			</div>
		</div>
	</div>	
</div>