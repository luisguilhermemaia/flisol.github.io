<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('../model/FlisolModel.php'); 

$flisol = new FlisolModel();

if(isset($_POST)){

	$flisol->setCidade($_POST['cidade']);
	$flisol->setCategoriaId($_POST['categoria_id']);
	$flisol->setNome($_POST['nome']);
	$flisol->setEmail($_POST['email']);
	$flisol->setEndereco($_POST['endereco']);
	$flisol->setTelefone($_POST['telefone']);
	

	$flisol->setInstituicao($_POST['instituicao']);
	$flisol->setSemestre($_POST['semestre']);
	$flisol->setLink($_POST['link']);
	$flisol->setResumo($_POST['resumo']);

	print $flisol->adicionarInscrito();
}