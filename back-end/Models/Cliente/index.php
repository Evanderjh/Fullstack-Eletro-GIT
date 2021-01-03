<?php

require "Cliente.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json"); 

$clientes = Cliente::getAll();

print_r(json_encode($clientes));
