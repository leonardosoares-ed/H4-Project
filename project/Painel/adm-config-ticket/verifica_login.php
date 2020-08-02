<?php
if(!$_SESSION['usuario_admin']) {
	header('Location: ../../admin/login-php/index.php');
	exit();
}

