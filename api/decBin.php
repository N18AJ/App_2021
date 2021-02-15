<?php

header('Content-Type: application/json');

//Cambiaremos decbin — Decimal a binario
if (isset($_GET["number"])) {
$resultado = decbin($_GET["number"]);
echo json_encode($resultado);
}
