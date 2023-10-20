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
	
	
	
	$res2 = mysqli_query($con,"select * from tb_boletim where id = '$codigo';"); 

	// $res2 = mysqli_query($con,"select * from tb_aluno where nota > 79 order by 1;");esta linha faz com que o codigo digitado puxe
	// os alunos com notas maior que 79 para passar de curso. 
	
echo "<table border=3px><tr><td>Codigo do Usuário</td><td>Nome do Aluno</td><td>AvaliaçãoA</td><td>AvaliaçãoB</td><td>AvaliaçãoC</td><td>AvaliaçãoD</td><td>Total</td><td>Frequência</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo  "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['AvaliaçãoA'] . "</td><td>" . $escrever['AvaliaçãoB'] . "</td><td>" . $escrever['AvaliaçãoC'] . "</td><td>" . $escrever['AvaliaçãoD'] . "</td><td>" . $escrever['Total'] . "</td><td>" . $escrever['Frequência']."%</td></tr>";;
echo "<tr><td colspan='8'>".$escrever['obs']."</td></tr>";
}/*Fim do while*/
echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";

?>

