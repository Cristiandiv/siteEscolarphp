<meta charset="utf-8"> 
<?php

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
	$email = $_POST['email'];
    $nota = $_POST['nota'];
    $frecue = $_POST['frecue'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	
	
	
	$res = mysqli_query($con,"INSERT INTO tb_aluno(id, nome, email, nota, frecue) VALUES('$codigo','$nome','$email','$nota','$frecue')"); 
	echo ("Cadastro realizada com sucesso!");
	/*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
    
	
	$res2 = mysqli_query($con,"SELECT * FROM tb_aluno;");
echo "<table border=3px><tr><td>Codigo do Aluno </td><td>Nome do Usuário</td><td>Email</td><td>Notas</td><td>Frecuência</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo "</td><td>". $escrever['id'] . "</td><td>". $escrever['nome'] . "</td><td>" . $escrever['email'] . "</td><td>". $escrever['nota'] . "</td><td>". $escrever['frecue'] . "</td></tr>";

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";
mysqli_close($con);
?>


