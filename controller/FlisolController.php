<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('../model/FlisolModel.php'); 

$flisol = new FlisolModel();

if(isset($_POST)){

	$flisol->setCategoriaId($_POST['categoria_id']);
	$flisol->setNome($_POST['nome']);
	$flisol->setEmail($_POST['email']);
	$flisol->setEndereco($_POST['endereco']);
	$flisol->setTelefone($_POST['telefone']);
	$flisol->setCidade($_POST['cidade']);
	$flisol->addInscrito();

}