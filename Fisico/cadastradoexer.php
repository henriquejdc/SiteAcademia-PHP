 <?php
       include 'conexao.php';
       $nome        = $_POST['exercicio']; 

       $sql =<<<EOF
          INSERT INTO exercicio (NOME)
          VALUES ('$nome');
EOF;

       
       pg_close($db);
    ?>    