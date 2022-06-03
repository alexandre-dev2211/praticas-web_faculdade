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
     			<center><h1>Cadastro de Produtos</h1></center>
     			<center><h3>Inclua Abaixo as Informações do Produto</h3></center>
     			<hr><br><br>
     			<form method="post" action="cadastro.php">
     				<center><input type="submit" value="Salvar" class="btn">
     				<br><br></center>
     			     <center><input type="reset" value="Limpar"	class="btn">
     				<br><br></center>
     				<hr><br><br><br>

     				<b>Nome do Produto</b><br>
     				<input type="text" name="nome" class="campo" maxlength="40" required autofocus>
     				<br>

     				<b>Descrição do Produto</b><br>
     				<input type="text" name="descricao" maxlength="100" required>
     				<br>

     				<b>Valor do Produto</b><br>				
     				<input type="decimal" name="valor" maxlength="8" required>
     				<br>

     				<b>Fornecedor</b><br>
     				<input type="text" name="fornecedor" maxlength="40" required>
     				<br>

     			</form>
     		</section>
     </body>
		</html>