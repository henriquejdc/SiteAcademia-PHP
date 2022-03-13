<?php
    session_start();
    if(!$_SESSION["cpf"]){
        session_destroy(); 
        header('location:login.php')
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="shortcut icon" href="./img/logo.jpg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Avaliação</title>

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
</script><script language="javascript">
function openwin (url, WindowName, Largura, Altura) {
newWin = window.open(url, WindowName,"resizable=no,width=" + Largura + ",height=" + Altura + ",status=no,location=no,scrollbars=0,toolbar=no,top=80,left=60");
newWin.focus();
}
</script>
<script type="text/javascript">
/*  
Cooperativa do Fitness - Pratique este Site !
*/
function SwitchMenu(obj){
    if(document.getElementById){
    var el = document.getElementById(obj);
    var ar = document.getElementById("cont").getElementsByTagName("DIV");
        if(el.style.display == "none"){
            for (var i=0; i<ar.length; i++){
                ar[i].style.display = "none";
            }
            el.style.display = "block";
        }else{
            el.style.display = "none";
        }
    }
}
function ChangeClass(menu, newClass) { 
     if (document.getElementById) { 
        document.getElementById(menu).className = newClass;
     } 
} 
document.onselectstart = new Function("return true");
</script>
<script language="JavaScript">
<!--


<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <h2> Avaliação Física </h2>
            <div class="red"><form>
                    <script language="JavaScript" src="./js/bodycomp.js.download"></script>
                    <br><br><br><p>
                                Número de pregas cutâneas que vão ser medidas.
                                  <select name="NumberSites">
                                  <option value="7">7 Pregas </option>
                                  <option value="3">3 Pregas </option>
                                </select></p>
                              <br><br><p class="Verdana_preto_bold"> Sexo 
                                <select name="Sex">
                                  <option value="Male">Masculino</option>
                                  <option value="Female">Feminino</option>
                                </select></p>
                              <p class="Verdana_preto_bold">  Idade (em anos)
                                <input name="Age" size="5"></p>
                              <p class="Verdana_preto_bold">   Peso (em kg - ex: 54.6   kg)
                                <input name="Weight" size="5">       </p>                      
                              <p>Tríceps (ex: 5.6
                                mm)
                                <input name="Triceps" size="5"></p>
                                 
                              <p class="Verdana_preto_bold"> Peito
                                <input name="Pectoral" size="5"></p>
                                
                              <p class="Verdana_preto_bold">
                                Sub-Axilar
                                <input name="Midaxilla" size="5"></p>
                              <p class="Verdana_preto_bold">
                                Subescapular
                                <input name="Subscapula" size="5"></p>
                              <p class="Verdana_preto_bold">
                                Abdominal
                                <input name="Abdomen" size="5"></p>
                              <p class="Verdana_preto_bold">
                                Supra-ilíaca
                                <input name="Suprailiac" size="5"></p>
                              <p class="Verdana_preto_bold">
                                Coxa
                                <input name="Quadriceps" size="5"></p>
                             <p align="center">
                                <input onclick="calc(this.form)" type="button" value="Calcular" name="button">
                                <input name="Reset" type="reset" value="Limpar">
                              </p>    
                            <h2>RESULTADOS</h2>
                              <p>   Densidade Corporal
                                <input name="Density" size="7"></p>
                              <p>   Massa Magra (kg)
                                <input name="LeanWeight" size="7"></p>
                              <p> Massa Gorda (kg)
                                <input name="FatWeight" size="7"></p>
                              <p>% Gordura
                                <input name="PercentFat" size="7"></p>
                                 
                              <p>   %Média da Pop.
                                <input name="PopulationAverage" size="7"></p>
                  </form>
            
            </div>
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
