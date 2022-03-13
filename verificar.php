                     <?php  
                         session_start();
                         include 'conexao.php';   

                        $sql =<<<EOF
                    SELECT * from CADASTROC;
EOF;

                   $ret = pg_query($db, $sql);
                   
                while($row = pg_fetch_row($ret)){
                    if($_POST['cpf'] == $row[0] && $_POST['senha'] == $row[5] ){
                        $_SESSION["cpf"] = $_POST['cpf'];
                        if($_SESSION["cpf"] == "12345" ) header('location:cadastro.php');
                        else if ($_SESSION["cpf"] == "123456" ) header('location:cficha.php');
                        else header('location:ficha.php');
                    }
                }
                pg_close($db);
                header('location:login.php');
                    ?>

