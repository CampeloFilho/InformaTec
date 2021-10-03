<!DOCTYPE html>
<html>
    <head>
        <title>Telefonia - InfoTec</title>
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
                    <li><a href="#">Gamer</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">PC's</a></li>
                    <li><a href="#">Telefonia</a></li>
                    <li><a href="#">Áudio e video</a></li>
                    <li><a href="cadastro_cliente.php">Cadastro Cliente</a></li>
                </ul>
            </div>
        </nav>
        <!--Fim do menu-->     
        <h3 class="blue-text lighten-2">Telefonia</h3>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.slider').slider();
            });
        </script>
        <!-- rodapé ou footer -->
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
                            <li><a class="grey-text text-lighten-3" href="index.php">HOME</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">INFORMÁTICA</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">GAMER</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">TELEFONIA</a></li>
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