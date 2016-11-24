<?php
	require_once "config.php";

	$user = $_POST['usuario'];
	$pwd = $_POST['senha'];
	$pwdMD5 = md5($pwd);
	
	if(empty($user))
	{
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}
	elseif(empty($pwd))
	{
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}else
	{
		$query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$user' AND SENHA = '$pwdMD5'"));
		if($query1 == 1)
		{
			echo "<meta http-equiv='refresh' content='0, url=./home.html'>";
		}else
		{
			echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
		}
	}
?>