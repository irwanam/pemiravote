<?php
	if(isset($_POST['SubmitLogout']))logout();

	echo "welcome ".$_SESSION['idusers'];
?>
<form role="form" method="post">
	<input name="SubmitLogout" type="submit" class="btn btn-danger" value="Logout"/>
</form>
