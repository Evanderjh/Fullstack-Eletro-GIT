<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Full Stack Eletro</title>
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
        <!-- Conteúdo -->
        <main class="container" style="height: 50vh;">
            <div class="container">
                <h1 class="mt-4">Sejam bem vindo(a)!</h1>
                <hr/>
                <p>Aqui em nossa loja, <i class="text-danger">programadores tem desconto</i> nos produtos para sua casa!</p>
            </div>
        </main>    
        <!-- Fim do Conteúdo -->
        <?php
            include('./script/footer.php')
        ?>
    </body>
</html>