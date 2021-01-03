<?php

require "../Connection.php";

class Cliente
{
    public $id;
    public $nome;
    public $rua;
    public $numero;
    public $bairro;
    public $estado;
    public $telefone;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT * FROM clientes;");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
