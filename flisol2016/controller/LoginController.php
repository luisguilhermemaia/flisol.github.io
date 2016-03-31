<?php
session_start();
//error_reporting(0);

include_once('flisol2016/model/FlisolModel.php');
$_SESSION['usuario'] = NULL;

if (isset($_POST["login"])) {
	$model = new FlisolModel();
	$usuario = $_POST["login"];
	$senha = $_POST["senha"];
	if ($model->login($usuario, $senha)){
		$_SESSION['usuario'] = 'admin@flisolce.org';
		header('Location: inscritos.php');
		exit;
	}else{
		print "<span style='color:red'> Usuário ou Senha invalidos ! Tente novamente!";
	}
}