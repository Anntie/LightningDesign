<?php

session_start();

if (isset($_SESSION['raveera'])) {
	header("Location: ../");
} else {
	$_SESSION['raveera'] = true;
	header("Location: ../");
}

?>