<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Escolar</title>
</head>
<body>
<?php
	
	echo "<br>
    <center>
    <div class='title'>
    <h1> Area de Consulta de Dados </h1>
    </div></center>
    <br>";

    echo "<center><a href='loginAlun.php'><button type='button' style='Background-color:gray;Padding: 30px;'>Aluno</button></a></center>";

    echo "<center><a href='loginProf.php'><button type='button' style='Background-color:White;Padding: 30px;'>Professor</button></a></center>";

	echo "<center><h1><a href='vconect.php'>Testar a conexão</a></h1></center>";


	echo "<center><h1><a href='exibe.php'>Consultar Relatorio do Aluno</a></h1></center>";
	

	echo "<center><h1><a href='cadastrar.php'>Cadastrar dados</a></h1></center>";
	

	echo "<center><h1><a href='alterar.php'>Alterar dados</a></h1></center>";
	
	echo "<center><h1><a href='excluir.php'>Excluir dados</a></h1></center>";
	

?>
</body>
</html>