<?php

require "../Connection.php";

class Pedido
{
    public $id;
    public $idCliente;
    public $idProduto;
    public $quantidade;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query(
            "SELECT pedidos.id_pedido, clientes.nome, produtos.nome as produto, pedidos.quantidade
            FROM fullstackeletro.pedidos
                INNER JOIN fullstackeletro.clientes
                    ON pedidos.id_cliente = clientes.id_cliente
                INNER JOIN fullstackeletro.produtos
                    ON pedidos.id_produto = produtos.id_produto
            ORDER BY id_pedido ASC;"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
