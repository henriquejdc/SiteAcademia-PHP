<?php
       session_start();
         if(!$_SESSION["cpf"]){
            session_destroy(); 
            header('location:login.php')
        } 
       include 'conexao.php';
       $nome        = $_POST['nome']; 
       $endereco         = $_POST['endereco'];
       $cpf     = $_POST['cpf'];    
       $genero     = $_POST['genero']; 
       $date    = $_POST['date']; 
       $telefone     = $_POST['telefone']; 
       $senha    = $_POST['senha']; 
       $observacao = $_POST['observacao'];
       $valor = $_POST['valor'];
       $frequencia = $_POST['frequencia'];

       $sql =<<<EOF
          INSERT INTO cadastro (CPF,NOME,ENDERECO,GENERO,DATANASC,SENHA,OBSERVACAO,VALOR,FREQUENCIA)
          VALUES ('$cpf', '$nome', '$endereco','$genero', '$date', '$senha', '$observacao', '$valor', '$frequencia' );
EOF;

       
       pg_close($db);
        header('location:painel.php');
?> 