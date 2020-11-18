<?php
include('./script/conexaobd.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <!-- <link rel="stylesheet" href="./css/estilo.css"> -->
    <script src="./script/script.js"></script>
</head>

<body>
    <!-- Menu -->
    <?php
    include('./script/bootstrap.php');
    include('./script/menu.php');
    ?>
    <!-- Fim do Menu -->
    <main class="container">
        <h1 class="mt-4">Produtos</h1>
        <hr />
        <div class="row">
            <section class="col-3" id="categorias">
                <h2>Categorias</h2>
                <ol>
                    <li onclick="exibirTodos()">Todos (12)</li>
                    <li onclick="exibirCategorias('Geladeira')">Geladeiras (3)</li>
                    <li onclick="exibirCategorias('Fogão')">Fogões (2)</li>
                    <li onclick="exibirCategorias('Microondas')">Microondas (3)</li>
                    <li onclick="exibirCategorias('Lavadora de Roupa')">Lavadoura de roupas (2)</li>
                    <li onclick="exibirCategorias('Lava Louça')">Lava-louças (2)</li>
                </ol>
            </section>
            <section class="col-9" id="produtos">
                <?php
                $sql = "select * from produto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                ?>
                        <div class="d-inline-block col-3 mr-4 ml-4 text-center align-botton">
                            <div class="box-produto" id="<?php echo $rows["nome"] ?>">
                                <img src="<?php echo $rows["img"] ?>" onclick="destacar(this)" style="height: 120px;">
                                <br/><br/>
                                <p><?php echo $rows["descricao"] ?></p>
                                <hr />
                                <p><s>R$ <?php echo $rows["preco"] ?></s></p>
                                <h4 class="text-danger">R$ <?php echo $rows["preco_final"] ?></h4>
                                <br/>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado!";
                }
                ?>
            </section>
        </div>
    </main>
    <!-- Fim dos Produtos -->
    <br />
    <?php
    include('./script/footer.php')
    ?>

</html>