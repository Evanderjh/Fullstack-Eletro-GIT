<?php

require "Produto.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json"); 

$produtos = Produto::getAll();

print_r(json_encode($produtos));
