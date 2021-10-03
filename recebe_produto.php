<!DOCTYPE html>
  <html>
    <head>
        <title>RECEBE PRODUTOS</title>
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
        <li><a href="cadastro_produto.php">CADASTRO</a></li>

        
      </ul>
    </div>
  </nav>
     
     <div class="container">
         <h3 class="blue-text lighten-2">PRODUTO CADASTRADO</h3>
        
         <table class="bordered responsive-table">
        <thead>
          <tr>
              <th>COD PRODUTO</th>
              <th>DESC PRODUTO</th>
              <th>NOME FABRICANTE</th>
              <th>DATA DE FABRICAÇÃO</th>
              <th>SETOR</th>
              <th>VALOR DE COMPRA</th>
              <th>VALOR DE VENDA</th>
          </tr>
        </thead>
     
        <?php
          $cod_produto        = $_POST['cod'];
          $descricao_produto  = $_POST['descricao'];
          $nome_fabricante    = $_POST['nome_fabricante'];
          $data_fabricacao    = $_POST['data_fabricacao'];
          $setor              = $_POST['setor'];
          $valor_compra    = $_POST['valor_compra'];
          $valor_venda    = $_POST['valor_venda'];
           
          echo' 
              <tbody>
                <tr>
                  <td>',$cod_produto,'</td>
                  <td>',$descricao_produto,'</td>
                  <td>',$nome_fabricante,'</td>
                  <td>',$data_fabricacao,'</td>
                  <td>',$setor,'</td>
                  <td>',$valor_compra,'</td>
                  <td>',$valor_venda,'</td>
               </tr>
             </body>
          
            ';
          ?>
           
     </table>
         
         
         
     </div>
     
     
     
     
     
     
     
     
     
     
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
  
 </body>
  </html>