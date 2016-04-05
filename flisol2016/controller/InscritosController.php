<?php
error_reporting(0);
session_start();

include_once('../model/FlisolModel.php');
include_once('../controller/SegurancaController.php');

$model = new FlisolModel();
$cidade = (isset($_GET['cidade']))?$_GET['cidade']:NULL;
$inscritos = $model->listarInscritos($cidade);

