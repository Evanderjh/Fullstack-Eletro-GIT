<?php

require "Comentario.php";

header("Access-Control-Allow-Origin:*");
header("Content-type: application/json"); 

$comentarios = Comentario::getAll();

print_r(json_encode($comentarios));
