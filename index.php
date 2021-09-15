<!DOCTYPE html>
  <html>
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper blue lighten-2">
            <ul class="left">
                <li><a href="#"><img src="img/LOGO_EEEPJA_3.png" width="50"></a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">INFORMÁTICA</a></li>
                <li><a href="#">GAMER</a></li>
                <li><a href="#">TELEFONIA</a></li>
            </ul>
            </div>
        </nav>
        <!-- término do menu -->     
            
        <!-- iniciando slide -->
        <div class="slider">
            <ul class="slides">
            <li>
                <img src="img/pc01.png"> <!-- random image -->
            </li>
            <li>
                <img src="img/LOGO_EEEPJA_3.png"> <!-- random image -->
            </li>
            <li>
                <img src="img/LOGO_EEEPJA_3.png"> <!-- random image -->
            </li>
            <li>
                <img src="img/LOGO_EEEPJA_3.png"> <!-- random image -->
            </li>
            </ul>
        </div>
        <!-- término do slide -->
        
        <div class="row">
            <h3 class="blue lighten-2 white-text">CATERGORIAS</h3>
        </div>
        
        <!-- iniciando os cards -->
        <div class="row">
                <div class="col s6 m3">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/pc01.png">
                        </div>
                        <div class="card-content">
                            <p>Processador: CORE I3<br>Memória RAM: 4GB <br></p>
                        </div>
                        <div class="card-action">
                            <a href="#">VER DETALHES</a>
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
                    <a href="#">VER DETALHES</a>
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
                    <a href="#">VER DETALHES</a>
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
                    <a href="#">VER DETALHES</a>
                    </div>
                </div>
                </div>
            </div>   
            <!-- TÉRMINO DA LINHA DOS CARDS -->
            
            <div class="row">
                <h3 class="white-text blue lighten-2">OFERTAS</h3>
            </div>
        
            <!--Começo Ofertas-->
            <div class="container">
                <div class="row">
                    <div class="col s5">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/pc02.jpg">
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <p>OFERTAS DO DIA - COMPUTADOR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s5">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/pc02.jpg">
                                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                                <p>OFERTAS DO DIA - COMPUTADOR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fim ofertas-->
            <!--Começo do rodapé--> 
            <footer class="page-footer blue lighten-2">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">PROGRAMAÇÃO WEB II</h5>
                            <p class="grey-text text-lighten-4">EEEP Joaquim Antônio Albano <br> Prof: Carlos Henrique</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Links</h5>
                            <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">HOME</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">INFORMÁTICA</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">GAMER</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">TELEFONIA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2021 - CARLOS HENRIQUE
                        <a class="grey-text text-lighten-4 right" href="#!">2º INFORMÁTICA</a>
                    </div>
                </div>
            </footer>
            <!--Fim do rodapé--> 
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('.slider').slider();
                });
            </script> 
        </body>
    </html>