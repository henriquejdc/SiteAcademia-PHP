<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="shortcut icon" href="./img/logo.jpg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>F.A. Painel </title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Comece na</span> Físico
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="painel.php">Painel</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="pagamento.php">Pagamento</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="relatorio.php">Relatorios</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
                <h2>Cadastrado</h2><br>
                 <div class="red">  <a href="painel.php"> Voltar </a> </div>
    
        </div>  
    </section>
    <?php
       include 'conexao.php';
       $nome        = $_POST['nome']; 
       $endereco         = $_POST['endereco'];
       $cpf     = $_POST['cpf'];    
       $genero     = $_POST['genero']; 
       $date    = $_POST['date']; 
       $telefone     = $_POST['telefone']; 
       $senha    = $_POST['senha']; 

       $sql =<<<EOF
          INSERT INTO cadastro (NOME,CPF,EMAIL,CEP,PAGAMENTO,TAMANHO,MODELO,COMENTARIO)
          VALUES ('$nome', '$cpf', '$email','$cep', '$pag', '$tamanho', '$capacete', '$comentario' );
    EOF;

       
       pg_close($db);
    ?>    
<footer>
    <div class="container text-center">
        <p>Copyright &copy; Henrique J. D. Corte 2017</p>
    </div>
</footer>
 <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
