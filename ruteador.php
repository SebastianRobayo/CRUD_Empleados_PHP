<?php

echo $controlador;
echo $accion;

include_once("Controladores/controlador_paginas.php");

$controlador=new ControladorPaginas();
$controlador->inicio();

?>