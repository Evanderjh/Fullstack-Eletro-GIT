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
        <!-- <link rel="stylesheet" href="./css/estilo.css"> -->
        <script src="./script/script.js"></script>
    </head>
    </head>
    <body>
        <!-- Menu -->
        <?php
            include('./script/bootstrap.php');
            include('./script/menu.php');
        ?>
        <!-- Fim do Menu -->        
        <!-- conteúdo -->
        <main class="container">
            <h1 class="mt-4">Contato</h1>
            <hr/>
            <section class="row mt-4 text-center">
                <div class="col-md">
                    <img src="./imagens/email.png" style="height: 15vh;">
                    <p class="mt-4"><b>contato@fullstackeletro.com</b></p>
                </div>
                <div class="col-md">
                    <img src="./imagens/whatsapp.jpeg" style="height: 15vh;">
                    <p class="mt-4"><b>(11) 99999-9999</b></p>
                </div>
            </section>
            <br/><br/>
            <!-- Inicio do formulário -->
            <section class="container mt-4 mb-4">
                <form class="form" method="post" action="">
                    <label for="nome"><b>Nome: </b></label> 
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite seu nome"/>  
                    <label class="mt-4"for="msg"><b>Mensagem: </b></label>
                    <input class="form-control" type="text" id="msg" name="msg" placeholder="Digite sua mensagem"/>
                    <input class="btn btn-primary btn-block mt-4" type="submit" id="submit" name="submit" value="Enviar" onclick="checkFrom()"/>
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
            <div class="container">
                <p><b>Data: </b><?php echo $rows["data"] ?><br/> 
                <b>Nome: </b><?php echo $rows["nome"] ?><br/> 
                <b>Mensagem:</b><?php echo $rows["msg"] ?></p>
                <hr class="mt-4 mb-4"/>
            </div>
            <?php
                    }
                }
            ?>
            <!-- Fim dos Comentários -->
        </main>
        <!-- Fim do conteúdo -->
        <br/><br/><br/>

       <?php
            include('./script/footer.php')
        ?>

    </body>
</html>