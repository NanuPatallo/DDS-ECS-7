<?php
header('Content-Type: application/json');

require_once '../../modelo/match.php';
require_once '../../modelo/persona.php';
require_once 'response/consultartodasresponse.php';

$resp = new ConsultarTodasResponse();
$resp->ListPersonas = Persona::ConsultarTodas();


echo json_encode($resp);
