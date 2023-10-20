<meta charset="utf-8"> 
<?php

    $codigo = $_POST['codigo'];
	$nota = $_POST['nota'];
	$frecue = $_POST['frecue'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
	$base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	
	$res = mysqli_query($con, "UPDATE tb_aluno SET nota='$nota' where id='$codigo';"); 
	$res3 = mysqli_query($con, "UPDATE tb_aluno SET frecue='$frecue' where id='$codigo';");
		echo ("Alteração realizada com sucesso!"); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
    $res2 = mysqli_query($con,"select * from tb_aluno where id='$codigo' "); 
echo "<table border=3px><tr><td>Codigo do Usuário</td><td>Nome do Usuário</td><td>Email do Usuário</td><td>Notas</td><td>Frecuência</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo  "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['email'] . "</td><td>".$escrever['nota']."</td><td>".$escrever['frecue']."%</tr>";

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";

?>

<a href="./edi_frec.php"><input type="button" value="voltar"></a>