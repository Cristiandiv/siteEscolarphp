<html>
<body>
</form>

<meta charset="utf-8"> 
<?php

    //$codigo = $_POST['codigo'];
	// $nome = $_POST['nome'];
	// $indice = $_POST['email'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
	$base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
		
	$res2 = mysqli_query($con,"select * from tb_aluno;"); 
	
echo "<table border=3px><tr><td>Codigo do Usuário</td><td>Nome do Usuário</td><td>Email do Usuário</td><td>Notas</td><td>Frequência</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo  "</td><td>" . $escrever['id'] . "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['email'] . "</td><td>" . $escrever['nota'] . "</td><td>" . $escrever['frecue']."%</td></tr>";;

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";

?>

<form method="POST">
	<fieldset>
	<table>
	  <tr>
	   <td> Digite o codigo do usuário a ser editado: </td>
	   <td><input size="15" name="codigo"></td>
	  </tr>	
	  <tr>
	   <td colspan=2><input type="SUBMIT"  value="Alterar"></td>
	  </tr>
	  </table>
	  </fieldset>
	  </form>

      <form action="exibir_edi_nota_frec.php" method="POST">
	<fieldset>
	<table>
    <tr>
	   <td> Digite o codigo do usuário novamente: </td>
	   <td><input size="15" name="codigo"></td>
	  </tr>	
	  <tr>
	   <td> Digite a nova nota do aluno: </td>
	   <td><input size="15" name="nota"></td>
	  </tr>
	   <tr>
	   <td> Digite as faltas do aluno: </td>
	   <td><input size="15" name="frecue"></td>
	  </tr>
	  <tr>
	   <td colspan=2><input type="SUBMIT"  value="Alterar"></td>
	  </tr>
	  </table>
	  </fieldset>
	  
	  </form>
</body>
</html>