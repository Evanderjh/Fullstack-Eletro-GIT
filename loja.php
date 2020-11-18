<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas Lojas - Full Stack Eletro</title>
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
        <main class="container mb-4">
            <h1 class="mt-4">Nossas Lojas</h1>
            <hr/>
            <section class="row">
                <div class="col-md m-4">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </div>
                <div class="col-md m-4">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3 &ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </div>
                <div class="col-md m-4">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major &Aacute;vila, 370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
                </div>
            </section>               
        </main>
        <!-- Fim do Conteúdo -->
        <?php
            include('./script/footer.php')
        ?>
    </body>
</html>