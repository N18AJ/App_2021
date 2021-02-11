<?php

header('Content-Type: application/json');

if (isset($_GET["number"])) {
$resultado = decbin($_GET["number"]);
echo json_encode($resultado);
}
