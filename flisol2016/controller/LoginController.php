<?php
error_reporting(0);
session_start();

include_once('flisol2016/model/FlisolModel.php');

$_SESSION['usuario'] = NULL;
$erro_msg = '';

if (isset($_POST["login"])) {
	$model = new FlisolModel();
	$usuario = $_POST["login"];
	$senha = $_POST["senha"];
	if ($model->login($usuario, $senha)){
		$_SESSION['usuario'] = 'admin@flisolce.org';
		header('Location: inscritos.php');
		exit;
	}else{
		$erro_msg =  "<span style='color:red'> Usuário ou Senha invalidos ! Tente novamente!";
	}
}