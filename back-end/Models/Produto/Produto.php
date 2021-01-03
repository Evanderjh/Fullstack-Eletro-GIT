<?php 

require "../Connection.php";

class Produto
{
    public $id;
    public $nome;
    public $preco;
    public $precoFinal;
    public $img;
    public $categoria;

    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query(
            "SELECT produtos.id_produto, categorias.categoria, produtos.nome, produtos.preco, produtos.preco_final, produtos.img
            FROM fullstackeletro.mercadorias
                inner join fullstackeletro.produtos
                    on mercadorias.id_produto = produtos.id_produto
                inner join fullstackeletro.categorias
                    on mercadorias.id_categoria = categorias.id_categoria
            ORDER BY id_produto ASC;"
        );
            
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
