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

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    var input = '<br><label>Exercicio <input type="text" name="exer[]" /> <a href="#" class="remove">X</a></label>';

    $("input[name='add']").click(function( e ){
        $('#inputs_adicionais').append( input );
    });

    $('#inputs_adicionais').delegate('a','click',function( e ){
        e.preventDefault();
        $( this ).parent('label').remove();
    });

});
</script>

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
                        <a class="page-scroll" href="tabelaexerc.php">Exercicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="cficha.php">Cadastro Ficha</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="relatoriof.php">Relatorio Fichas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="avali.html">Avaliação</a>
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

                <h2>Nova Ficha</h2>

                (Exclua a ficha antiga antes)
                <!-- Php dos exercicios cadastrados -->
                <form action="cadastrado1.php" method="post">
                    <div class="red">
                        <br><label> CPF</label><br>
                        <input name="CPF" ><br><br>

                        <label> Divisão Treino</label><br>
                        <input name="divisão" ><br><br>

                        <label> Objetivo</label><br>
                        <input name="objetivo" ><br><br>

                        <label> ID do exercicio</label><br> <!-- alterar para redirecionar para outra pegina -->
                        <input name="exerc" ><br><br>

                        <input type="submit" value="Cadastrar"><br><br>
                    </div> 
                </form> 

                <br><br><h2>Excluir Ficha </h2> 
                <form action="cadastrado1.php" method="post">
                    <div class="red">
                        <br><label> CPF</label><br>
                        <input name="CPF" ><br><br>
                    
                        <input type="submit" value="Cadastrar"><br><br>
                    </div> 
                </form> 
        </div>
    </section>
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
