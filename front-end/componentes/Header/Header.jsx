const Header = () => {
    return (
        <header className="container">
            <nav className="navbar navbar-dark bg-danger">
                <a href="./index.php" className="nav-item mr-4 ml-4">
                    <img id="logotipo" src="./imagens/logotipo.jpeg" alt="Logotipo Full Stack Eletro" />
                </a>
                    <a href="./produtos.php" className="nav-item text-white mr-4 ml-4">Produtos</a>
                    <a href="./loja.php" className="nav-item text-white mr-4 ml-4">Nossas Lojas</a>
                    <a href="./contato.php" className="nav-item text-white mr-4 ml-4">Contato</a>
            </nav>
        </header>
    );
}
