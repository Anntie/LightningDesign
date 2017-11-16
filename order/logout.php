<?php
	session_start();
	if($_SESSION['lightning'] != true) {
		header("Location: ../");
	} else {
		unset($_SESSION['lightning']);
    session_destroy();
		header("Location: ../");
	}
?>
