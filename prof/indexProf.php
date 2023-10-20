<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Consulta e edição do Professor</title>
</head>
<body>

<?php
	
	echo "<br>
    <center>
    <div class='title'>
    <h1> Consulta e Cadastro de Notas, <br> Boletim e Certificado. </h1>
    </div></center>
    <br>";

    echo "<center><a href='../index.php'><button type='button' style='Background-color:gray;Padding: 30px;'>Voltar</button></a></center>";

    echo "<center><h1><a href='cadas_aluno.php'>Cadastrar novas informações</a></h1></center>";

	echo "<center><h1><a href='edi_frec.php'>Consultar e editar nota e faltas</a></h1></center>";
	
	echo "<center><h1><a href='../aluno/boletim.php'>Gerar boletim</a></h1></center>";
	
	echo "<center><h1><a href='../aluno/certificado.php'>Certificado</a></h1></center>";

    echo "<center><h1><a href='excluir_informacao.php'>Limpar dados</a></h1></center>";
	

?>
</body>
</html>