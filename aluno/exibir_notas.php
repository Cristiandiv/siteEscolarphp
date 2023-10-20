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
	// 	echo ("Alteração realizada com sucesso!"); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
    
	//Linhas 13,14,15 deixavam as linhas da tabela aluno em branco, do codigo que voce inseria, porque ele dava "update" em branco,
	//por isso nao tinha nenhum dado ao pedir o relatorio do id de tal aluno (ex: $nome = $post = > nada => banco 'nome' => nada.).
	
	$res2 = mysqli_query($con,"select * from tb_aluno where id = '$codigo';"); 

	// $res2 = mysqli_query($con,"select * from tb_aluno where nota > 79 order by 1;");esta linha faz com que o codigo digitado puxe
	// os alunos com notas maior que 79 para passar de curso. 
	
echo "<table border=3px><tr><td>Codigo do Usuário</td><td>Nome do Usuário</td><td>Email do Usuário</td><td>Notas</td><td>Frequência</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo  "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['email'] . "</td><td>" . $escrever['nota'] . "</td><td>" . $escrever['frecue']."%</td></tr>";;

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";

?>

