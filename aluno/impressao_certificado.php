<meta charset="utf-8"> 
<?php

    $codigo = $_POST['codigo'];
	// $nome = $_POST['nome'];
	// $indice = $_POST['email'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
	$base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	
	// $res = mysqli_query($con, "UPDATE tb_aluno SET nome='$nome' where id='$codigo';"); 
	// $res3 = mysqli_query($con, "UPDATE tb_aluno SET email='$indice' where id='$codigo';");
	// 	echo ("Alteração realizada com sucesso!"); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */s
	$res2 = mysqli_query($con,"select * from tb_aluno where id = '$codigo';");  

	// $res2 = mysqli_query($con,"select * from tb_aluno where nota > 79 order by 1;");esta linha faz com que o codigo digitado puxe
	// os alunos com notas maior que 79 para passar de curso. 
	
echo "<table border=3px><tr><td><center>Certificado de Conclusão de Curso</center></td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */


while($escrever=mysqli_fetch_array($res2)){

if($escrever['nota']>79 && $escrever['frecue']>75)
{
/*Escreve cada linha da tabela*/
echo  "</td><td>O Aluno ". $escrever['nome'] ." concluiu com exito o Curso de Linux <br> Expert ministrado entre 28/07/2022 e 28/10/2022  demonstrou <br> dedicação e empenho exemplares, parabens e boa sorte no futuro.</td></tr>";;
}
else
{
    echo  "</td><td>O Aluno ". $escrever['nome'] ." não alcançou os requisitos <br> necessarios para a emissao do cerificado.</td></tr>";;  
}
}/*Fim do while*/

echo "</table>";

echo "</br></br>";

?>

