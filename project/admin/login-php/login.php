<?php
session_start();
include('../../conexao.php');

if(empty($_POST['usuario_admin']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario_admin = mysqli_real_escape_string($conexao, $_POST['usuario_admin']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_admin from usuario_admin where usuario_admin = '{$usuario_admin}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario_admin'] = $usuario_admin;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}