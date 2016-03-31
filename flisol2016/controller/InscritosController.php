<?php
error_reporting(0);
include_once('../model/FlisolModel.php');
error_reporting(E_ALL);
ini_set('display_errors', 0);

$flisol = new FlisolModel();

if (isset($_POST)) {

    $flisol->setCidade($_POST['cidade']);
    
    print $flisol->listarCidades();
}


