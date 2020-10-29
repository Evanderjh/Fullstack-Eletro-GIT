CREATE SCHEMA fullstackeletro;

CREATE TABLE fullstackeletro.produto (
	cod_prod INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(80) NOT NULL,
	descricao VARCHAR(200) NULL,
    preco FLOAT NOT NULL,
    preco_final FLOAT NOT NULL,
    img VARCHAR(200) NOT NULL
)ENGINE = innoDB;

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Geladeira", "Geladeira Frost Free Brastemo Side Inverse 540l", 6389.00, 5019.00, "imagens/geladeira2.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Geladeira", "Geladeira Frost Free Brastemp Branca 375l", 2068.60, 1910.00, "imagens/geladeira1.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Geladeira", "Geladeira Frost Free Consul Prata 340l", 2199.90, 2069.00, "imagens/geladeira3.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Fogão", "Fogão 4 Bocas Consul Inox com Mesa de Vidro", 1209.90, 1129.00, "imagens/fogao1.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Fogão", "Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático", 609.98, 519.70, "imagens/fogao2.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Microondas", "Microondas Consul 32l Inox 220v", 580.90, 409.88, "imagens/microondas1.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Microondas", "Microondas 25l Espelhado Philco 220v", 508.78, 464.53, "imagens/microondas2.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Microondas", "Forno Microondas Electrolux 20L Branco", 459.90, 436.00, "imagens/microondas3.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Lava Louça", "Lava Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem 127v", 3599.00, 2799.90, "imagens/lavaLouca2.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Lava Louça", "Lava Louça Compacta 8 Serviços Branca 127v Brastemp", 1970.50, 1730.00, "imagens/lavaLouca1.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Lavadora de Roupa", "Lavadora de Roupa Brastemp 11KG com Turbo Performance Branca", 1699.00, 1214.00, "imagens/lavaRoupas2.jpeg");

INSERT INTO fullstackeletro.produto (nome, descricao, preco, preco_final, img)
VALUE ("Lavadora de Roupa", "Lavadora de Roupas Philco Inverter 12KG", 2399.90, 2179.00, "imagens/lavaRoupas1.jpeg");

select * from fullstackeletro.produto;
