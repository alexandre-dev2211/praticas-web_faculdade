<?php 

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql ="select * from produtos where descricao like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);


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
     			<center><h1>Número de Registros Encontrados na Base de Dados</h1></center>
     			<center><h3>Aplique Filtros Para Refinar a Pesquisa</h3></center>
     			<hr><br><br>
     			<center><b><form method="get" action="">
     				Filtrar por Descrição: <input type="text" name="filtro" class="campo" required, autofocus>
     				<input type="submit" value="Filtrar" class="btn">
     			</center></b></form>
     	     	<b><h4>

     	     	<?php

     			print "$registros registros encontrados";

                    print "<br><br>"

                    ?>

               <article>

                    <?php 

                    while($exibirRegistros = mysqli_fetch_array($consulta)){
                         
                         $nome = $exibirRegistros[0];
                         $descricao = $exibirRegistros[1];
                         $valor = $exibirRegistros[2];
                         $fornecedor = $exibirRegistros[3];

                         echo "Código: $nome<br>";
                         echo "Nome: $descricao<br>";
                         echo "Descrição: $valor<br>";
                         echo "Valor em (R$): $fornecedor<br>";
                    }

                    mysqli_close($conexao);    
               
                    ?>

               </article>

                    <?php

                    print "Resultado da pesquisa com a palavra $filtro<br><br>"

                    ?>

     		     </b></h4>
     		</section>
     	</div>
     </body>
</html>