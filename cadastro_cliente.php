<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Cliente</title>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <!--Começo do Menu-->
        <nav>
            <div class="nav-wrapper purple accent-3">
                <ul class="left">
                    <li><a href="#"><img src="img/LOGO_EEEPJA_3.png" width="50"></a></li>
                    <li><a href="Gamer.php">Gamer</a></li>
                    <li><a href="TV.php">TV</a></li>
                    <li><a href="PC's.php">PC's</a></li>
                    <li><a href="Telefonia.php">Telefonia</a></li>
                    <li><a href="Audio_e_video.php">Áudio e video</a></li>
                    <li><a href="cadastro_cliente.php">Cadastro Cliente</a></li>
                </ul>
            </div>
        </nav>
        <!--Fim do menu--> 
        <!--Começo do Formulário-->
        <form action="recebe.php" method="post">
            <div class="container">
                <div class="row">
                    <h3>Cadastro de Clientes</h3>
                    <div class="col s6">
                        <input type="text" name="nome" placeholder="Nome do Cliente">
                    </div>
                    <div class="col s6">
                        <input type="text" name="sobrenome" placeholder="Sobrenome cliente">                
                    </div>          
                    <div class="col s6">
                        <input type="email" name="email" placeholder="E-mail"><!-- comment -->
                    </div>          
                    <div class="sol s5">
                        <button class="btn waves-effect waves-light" type="submit">
                            <i class="material-icons right">send</i> 
                            Cadastrar
                        </button>                        
                    </div>
                </div>    
            </div>             
        </form>
        <!--Fim do Formulário-->
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>      
            $(document).ready(function(){
                $('.slider').slider();
            });    
        </script>
        <!--Começo do rodapé-->
        <footer class="page-footer purple accent-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Programação Web II</h5>
                        <p class="grey-text text-lighten-4">EEEP Joaquim Antônio Albano <br> Prof: Carlos Henrique</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                            <li><a class="grey-text text-lighten-3" href="PC's.php">PC's</a></li>
                            <li><a class="grey-text text-lighten-3" href="TV.php">PC's</a></li>
                            <li><a class="grey-text text-lighten-3" href="Gamer.php">Gamer</a></li>
                            <li><a class="grey-text text-lighten-3" href="Telefonia.php">Telefonia</a></li>
                            <li><a class="grey-text text-lighten-3" href="Audio_e_video.php">Audio e Video</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2021 - Raimundo Nonato Neves Campelo Filho    
                    <a class="grey-text text-lighten-4 right">2º INFORMÁTICA</a>
                </div>
            </div>
        </footer>
        <!--Fim do rodapé-->
    </body>
</html>
  
  