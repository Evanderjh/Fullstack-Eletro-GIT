<?php
    include('./script/conexaobd.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./script/script.js"></script>
    </head>
    <body>
        <!-- Menu -->
        <?php
            include('./script/menu.php');
        ?>
        <!-- Fim do Menu -->   
        <main id="contProduto">
            <h1>Produtos</h1>
            <hr/>
            <section id="categorias">
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
            <section id="produtos">
            <?php        
                $sql = "select * from produto";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
            ?>
                <div class="box-produto" id="<?php echo $rows["nome"]?>">
                    <img src="<?php echo $rows["img"]?>" onclick="destacar(this)">
                    <br/><br/>
                    <p><?php echo $rows["descricao"]?></p>
                    <hr/>
                    <p class="valor">R$ <?php echo $rows["preco"]?></p>
                    <p class="valorAtual">R$ <?php echo $rows["preco_final"]?></p>
                    <br/>
                </div>
            <?php
                    }
                }else{
                 echo "Nenhum produto cadastrado!";
                }
            ?>
            </section>
        </main>
        <!-- Fim dos Produtos -->
        <br/>
        <!-- Rodapé -->
        <footer>
            <p id="formasDePagamento">Formas de pagamento</p>
            <img src="./imagens/formasDePagamento.jpeg" alt="Formas de pagamento"> 
            <p id="rodape">&copy; Recode Pro</p>
        </footer>
        <!-- Fim do Rodapé -->
</html>