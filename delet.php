<?php
	 <?php
       include 'conexao.php';
       $cpf     = $_POST['cpf'];  

       $sql =<<<EOF
          DELETE FROM cadastro WHERE CPF = $cpf;
EOF; 
     header('location:painel.php');
?>