/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Administrador
 * Created: Apr 4, 2019
 */

CREATE DATABASE huckburguer;

USE huckburguer;

CREATE TABLE pedidos(
	id_pedidos INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    ponto_carne VARCHAR(30) NOT NULL,
    opt_pao VARCHAR(30) NOT NULL,
    opt_queijo VARCHAR(30) NOT NULL,
    observacao VARCHAR(200)
);

INSERT INTO pedidos(nome, telefone, ponto_carne, opt_pao, opt_queijo, observacao) 
VALUES ('Luana Fernandes', '(21)9XXXX-XXXX', 'Ao Ponto', 'Italiano com ervas', 'Prato','Bebida: Manda um suco de abacaxi com hortelã, bem gelado. Obrigado!'),
('Marcelo Andrade', '(21)9XXXX-XXX', 'Ao Ponto', 'Italiano com ervas', 'Muçarela', 'Suco de Laranja');
