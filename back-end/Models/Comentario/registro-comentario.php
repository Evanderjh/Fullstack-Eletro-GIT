<?php

require "Comentario.php";

$comentario = new Comentario;
$comentario->nome = $_POST['nome'];
$comentario->msg = $_POST['msg'];

$validar = $comentario->registroComentario();

if ($validar) {
    echo json_encode(true);
} else {
    echo json_encode(false);
}
