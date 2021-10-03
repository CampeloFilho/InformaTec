<!DOCTYPE html>
  <html>
    <head>
        <title>Cadastro de Produto</title>
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
        <div class="container">
            <h3 class="blue-text lighten-2">CADASTRO DE PRODUTOS</h3>       
            <form action="recebe_produto.php" method="post">
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="text" name="cod" placeholder="COD Produto">
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="text" name="descricao" placeholder="Descrição do Produto">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="text" name="nome_fabricante" placeholder="Nome do Fabricante">
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="date" name="data_fabricacao" >
                    </div>
                </div>  
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="text" name="setor" placeholder="Setor">
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="text" name="valor_compra" placeholder="Valor de Compra">
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">check_circle_outline</i>
                        <input type="text" name="valor_venda" placeholder="Valor de Venda">
                    </div>
                    <div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">CADASTRAR
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>        
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