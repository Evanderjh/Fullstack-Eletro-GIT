<?php
    include('./script/conexaobd.php');

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentario (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <script src="./script/script.js"></script>
    </head>
    </head>
    <body>
        <!-- Menu -->
        <?php
            include('./script/menu.php');
        ?>
        <!-- Fim do Menu -->        
        <!-- conteúdo -->
        <main id="contatoPage">
            <section class="contato">
                <h1>Contato</h1>
                <hr/>
                <br/><br/>
                <div>
                    <img src="./imagens/email.png">
                    <p>contato@fullstackeletro.com</p>
                </div>
                <div>
                    <img src="./imagens/whatsapp.jpeg">
                    <p>(11) 99999-9999</p>
                </div>
            </section>
            <br/><br/>
            <!-- Inicio do formulário -->
            <section class="contatoForm">
                <form method="post" action="">
                    <h2>Nome: </h2> 
                    <input type="text" id="nome" name="nome"/>  
                    <h2>Mensagem: </h2>
                    <input type="text" id="nome" name="msg"/>
                    <input type="submit" id="submit" name="submit" value="Enviar" onclick="checkFrom()"/>
                </form>
            </section>
            <!-- Fim do formulário -->
            <!-- Comentários -->
            <h2>Comentários</h2>
            <hr/>
            <?php
                $sql = "select * from comentario";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
            ?>
            <div>
                <p><b>Data: </b><?php echo $rows["data"] ?><br/> 
                <b>Nome: </b><?php echo $rows["nome"] ?><br/> 
                <b>Mensagem:</b><?php echo $rows["msg"] ?></p>
                <hr/>
            </div>
            <?php
                    }
                }
            ?>
            <!-- Fim dos Comentários -->
        </main>
        <!-- Fim do conteúdo -->
        <br/><br/><br/>
        <!-- Rodapé -->
        <footer>
            <p id="formasDePagamento">Formas de pagamento</p>
            <img src="./imagens/formasDePagamento.jpeg" alt="Formas de pagamento"> 
            <p id="rodape">&copy; Recode Pro</p>
        </footer>
        <!-- Fim do Rodapé -->
    </body>
</html>