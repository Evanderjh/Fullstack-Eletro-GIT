CREATE TABLE fullstackeletro.pedido (
	cod_pedido INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(120) NOT NULL,
    telefone INT,
    nome_produto VARCHAR(200) NOT NULL,
    quantidade INT NOT NULL,
    valor_unitario FLOAT NOT NULL,
    valor_total FLOAT NOT NULL
)ENGINE = innoDB;

INSERT INTO fullstackeletro.pedido (nome, endereco, telefone, nome_produto, quantidade, valor_unitario, valor_total)
VALUES ("Evander Hudson Pereira", "Rua B, 50 - Jardim Ângela, SP", 44445555, "Lavadora de Roupas Philco Inverter 12KG", 2, 2179.00, 4358.00);

INSERT INTO fullstackeletro.pedido (nome, endereco, telefone, nome_produto, quantidade, valor_unitario, valor_total)
VALUES ("Felipe Dantas", "Rua A, 33 - Jardim Gaivotas, SP", 33334444, "Forno Microondas Electrolux 20L Branco", 5, 436.00, 2180.00);

INSERT INTO fullstackeletro.pedido (nome, endereco, telefone, nome_produto, quantidade, valor_unitario, valor_total)
VALUES ("Danusa", "Rua C, 67 - Pinheiros, SP", 22223333, "Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático", 3, 519.70, 1559.10);

INSERT INTO fullstackeletro.pedido (nome, endereco, telefone, nome_produto, quantidade, valor_unitario, valor_total)
VALUES ("Ester", "Rua D, 44 - Brasilândia, SP", 11112222, "Lava Louça Electrolux Inox com 10 Serviços, 06 Programas de Lavagem 127v", 4, 2799.90, 11199.60);

select * from fullstackeletro.pedido;