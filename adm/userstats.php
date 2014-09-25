<?php
	if(isset($_POST['SubmitLogout']))logout();
?>
<div class="row clearfix ">
	<form role="form" method="post">
		<input name="SubmitLogout" type="submit" class="btn btn-danger" value="Logout"/>
	</form>
</div>