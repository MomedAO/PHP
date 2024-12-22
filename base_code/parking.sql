/**estacionamento para cadastrar os
veículos estacionados. Neste banco, crie uma tabela chamada
veiculos com os campos id , placa , marca , modelo ,
hora_entrada e hora_saida . MESRCEDES CHEVORLACK LAMBORGINNE*/

CREATE DATABASE parking COLLATE = "UTF8_GENERAL_CI";
USE parking;

CREATE TABLE vehicle (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    face_plate VARCHAR(13) NOT NULL,
    brand VARCHAR(15) NOT NULL,
    model VARCHAR(15) NOT NULL,
    check_in DATETIME,
    check_out DATETIME
);