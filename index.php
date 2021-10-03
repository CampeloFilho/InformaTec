<!DOCTYPE html>
<html>
    <head>
        <title>Home - InfoTec</title>
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
        <!--Começo do slide-->
        <div class="slider">
            <ul class="slides">
                <li><img class="m3 responsive-img" src="img/001.png"></li>
                <li><img src="img/slide01.png"></li>
                <li><img src="img/slide01.png"></li>
                <li><img src="img/slide01.png"></li>
            </ul>
        </div>
        <!--Fim do slide-->  
        <div class="row">
            <h3 class="purple accent-3 white-text">Categorias</h3>
        </div>
        <!--Começo dos cards-->
        <div class="row">        
            <div class="col s6 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/pc01.png">
                    </div>
                    <div class="card-content">
                        <p>Processador: Core I3<br>Memória RAM: 4GB <br></p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col s6 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/pc01.png">
                    </div>
                    <div class="card-content">
                        <p>Processador: CORE I3<br>
                            Memória RAM: 4GB <br>
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col s6 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/pc01.png">
                    </div>
                    <div class="card-content">
                        <p>Processador: CORE I3<br>
                            Memória RAM: 4GB <br>
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver detalhes</a>
                    </div>
                </div>
            </div>
            <div class="col s6 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/pc01.png">
                    </div>
                    <div class="card-content">
                        <p>Processador: CORE I3<br>
                            Memória RAM: 4GB <br>
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver detalhes</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Fim dos cards-->
        <div class="row">
            <h3 class="white-text purple accent-3">Ofertas</h3>
        </div>
        <!--Começo das Ofertas-->
        <div class="container">
            <div class="row">          
                <div class="col s6">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/pc02.jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light purple accent-3"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>Ofertas do dia - Computadores</p>
                        </div>
                    </div>
                </div>      
                <div class="col s6">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/pc02.jpg">
                            <a class="btn-floating halfway-fab waves-effect waves-light purple accent-3"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>Ofertas do dia - Computadores</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div> 
        <!--Fim das Ofertas--> 
        <!--Mais vistos-->
        <p class="center purple accent-3 white-text">Mais vistos</p>
        <div class="container">
            <div class="row">      
                <div class="col s3 ">
                    <center>
                        <img  class="responsive-img circle"src="img/pc02.jpg" width="100">
                    </center>
                    <p>informática</p>
                </div>      
                <div class="col s3">
                    <img  class="responsive-img circle"src="img/pc02.jpg" width="100">
                    <p>informática</p>
                </div>     
                <div class="col s3">
                    <img  class="responsive-img circle"src="img/pc02.jpg" width="100">
                    <p>informática</p>
                </div>      
                <div class="col s3">
                    <img  class="responsive-img circle"src="img/pc02.jpg" width="100">
                    <p>informática</p>
                </div>
            </div>
        </div>
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
    </body>
</html>