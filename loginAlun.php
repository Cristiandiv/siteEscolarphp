<html>
<head>
<title>Login e Senha</title>
<meta charset="utf-8"> 
</head>
<body>

<?php

    $senha = $_GET['senha'];
	$email = $_GET['email'];
	// $frecue = $_POST['frecue'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
	$base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	
	$res = mysqli_query($con,"select * from tb_loginAlun where senha='$senha' or email='$email'");  

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){

if($escrever['senha']== $senha && $escrever['email']==$email)
{
    echo "<center><a href='aluno/indexA.php'><input style='padding:5px; background-color: yellow;' type='submit' value='Ir'></a></center>";
}
else
{
    echo  "<center><h1 style='padding:5px; background-color: yellow;'>Senha e/ou Usuario incorretos.</h1></center>";;  
}
}
?>


	<center>
	<form action="loginAlun.php" method="GET">
	<fieldset>
	<table>
		<tr><h1>Login do Aluno</h1></tr>
	  <tr>
	   <td> Usuário: </td>
	   <td><input size="15" name="email"></td>
	  </tr>
	   <tr>
	   <td> Senha: </td>
	   <td><input size="15" name="senha" type="password"></td>
	  </tr>
	  <tr>
	   <td colspan=2><input type="submit" value="Entrar"></td>
	  </tr>
	  <tr></tr>
	  <tr>
		<td colspan=2>**obs: clique no botão "Ir" no canto superior se os dados estiverem corretos.</td>
		</tr>
	  </table>
	  </fieldset>
	  </form>
	  </center>

</body>
</html>
