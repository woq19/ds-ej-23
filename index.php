<?php

require_once 'modelo/nacionalidad.php';
require_once 'modelo/persona.php';

$nac = new nacionalidad();
$nac->Id=1;
$nac->Descripcion='Argentina';

$per = new persona();
$per->nombre='Walter';
$per->direccion='Rioja 1177';
$per->numeroDeDocumento=39663133;
$per->nacionalidad=$nac;

$per->MostrarDatos();