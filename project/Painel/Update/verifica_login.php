<?php
if(!$_SESSION['usuario']) {
	header('Location: ../../login-php/login-php/index.php');
	exit();
}

