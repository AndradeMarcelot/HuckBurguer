<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = 'Oracle%9751';
$bdBanco = 'huckburguer';
        
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco) or die("Não foi possível conectar");
   
mysqli_set_charset($conexao, "utf8");


?>