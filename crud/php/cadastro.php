<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$fornecedor = $_POST['fornecedor'];

$sql = "insert into produtos (nome, descricao, valor, fornecedor) values ('$nome','$descricao','$valor','$fornecedor')";
$salvar = mysqli_query($conexao,$sql);


mysqli_close($conexao)

?>

<!DOCTYPE html>
<html lang= "pt-br">
     <head>
	     <meta charset="utf-8">
	     <title>Casa da Técnologia</title>
	     <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>
     <body>
     	<div class="container">
     		<nav>
     			<ul class="menu">
     				<a href="index.php"><center><li>Cadastro</li></a></center>
     				<a href="filtrar.php"><center><li>Consultas e Filtragens</li></a></center>
     			</ul>
     		</nav>
     		<section>
     			<center><h1>Dados Salvos com Êxito</h1></center>
     			<center><h3>Clique em Cadastro para Inserir Novo Produto</h3></center>
     			<hr><br><br>
     		</section>
     </body>
		</html>