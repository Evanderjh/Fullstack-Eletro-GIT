CREATE TABLE fullstackeletro.comentario(
	id_comentario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    msg VARCHAR(300),
    `data` DATETIME DEFAULT now()/*Pega a hora do "AGORA"*/
)Engine = innorDB;

