<?php
	if(isset($_POST['modifier_tarpit'])) {
		$temps = $_POST['temps'];
		update_tarpit($temps);
	}
?>