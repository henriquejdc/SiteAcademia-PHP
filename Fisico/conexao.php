<?php 
			   $local_serve = "mysql.hostinger.com.br";
			   $user="u894603928_admin";
			   $senha="admin1";
			   $banco="u894603928_fisic";

			   $con=@mysql_connect($local_serve,$user,$senha) or die("Não conectou");

			   $db=@mysql_select_db($banco,$con) or die("Não conectou ao banco");
?>