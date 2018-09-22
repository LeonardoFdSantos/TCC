<?php
$servidor = 'localhost'; // pc-sala-04
$usuario = 'root'; // aluno
$senha = ''; // etec@147
$banco = 'Domoticar';
//conexão com o banco de dados
$conexao = @mysqli_connect($servidor,$usuario,$senha,$banco) or die("ERRO NA CONEXÃO COM MYSQL");
// $db = @mysqli_select_db($conexao, $banco) or die("ERRO NA SELEÇÃO DO BANCO DE DADOS MYSQL");