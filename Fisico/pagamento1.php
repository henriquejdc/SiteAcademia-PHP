<?php
       session_start();
         if(!$_SESSION["cpf"]){
            session_destroy(); 
            header('location:login.php')
        } 
       include 'conexao.php';
       $cpf     = $_POST['cpf'];    
       $valor   = $_POST['valor']; 
       $date = $_POST['date'];

         $sql =<<<EOF
                    SELECT * from PAGAMENTO;
EOF;

                   $ret = pg_query($db, $sql);
                   

       while($row = pg_fetch_row($ret)){
          if($_POST['cpf'] == $row[0] ){
                        $sql =<<<EOF
          DELETE FROM PAGAMENTO WHERE CPF = $cpf;
EOF; 
                    }
      }


       $sql =<<<EOF
          INSERT INTO pagamento (CPF,VALOR,DATAPAG)
          VALUES ($cpf', '$valor' , "$date" );
EOF;

       
       pg_close($db);
        header('location:painel.php');
?> 