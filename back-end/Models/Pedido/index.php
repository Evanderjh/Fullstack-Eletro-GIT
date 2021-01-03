<?php

require "Pedido.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json"); 

$pedidos = Pedido::getAll();

print_r(json_encode($pedidos));
