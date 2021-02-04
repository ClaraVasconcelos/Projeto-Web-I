
<html>
    <head>
        <style>
            body {
               background-image: url("img/tela.jpg");
               background-repeat: no-repeat;
               background-color: #cccccc;
               margin: 0;
            }
            input[type=text], input[type=password] {
                width: 70%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
               
            }
            #Ed{
                font-size: 50px;
                font-family: serif;
            }
            .login{
                margin-top: -129px;
                text-align: center;
                margin: 24px 0 12px 0;
                left: 50%;
                margin-left: -400px;
                position: absolute;
                top: 30%;
                width: 800px;
                box-sizing: border-box;
                
                
            }
            .divInterno{
                height: 240px;
                padding-top: 40px;
                background-color: #f1f1f1;
                padding: 16px;
                margin: 20px;
                width: 460px;
                margin-left: 170px;
                padding-left: 0px;
                padding-right: 0px;
                border-radius: 9px;
                box-shadow: 0 2px 4px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.19);
            }
            button {

                background-color: #5b79de;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                width: 80%;
            }

            button:hover {

                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            }

            #mySidenav a {
                position: absolute;
                left: -80px;
                transition: 0.3s;
                padding: 15px;
                width: 100px;
                text-decoration: none;
                font-size: 20px;
                color: white;
                border-radius: 0 5px 5px 0;
                background-color: black;
            }

            #mySidenav a:hover {
                left: 0;
            }

            #about {
                top: 20px;
                background-color: #4CAF50;
            }

            #blog {
                top: 80px;
                background-color: #2196F3;
            }

            #projects {
                top: 140px;
                background-color: #f44336;
            }

            #contact {
                top: 200px;
                background-color: #555
            }
            #menu{
                
            }
            #menu ul{
                margin: 0;
                background-color: black;
                list-style: none;
            }
            #menu ul li{
                display: inline;
            }
            #menu ul li a{
                padding: 15px 15px;
                display: inline-block;
                color: white;
                text-decoration: none;
            }
            #menu ul li a:hover{
                color: blue;
            }
        </style>
    </head>
    <body>
        <div id ="menu">
            <ul>
                <li><a href ="#">Home</a></li>
                <li><a href ="#">Populares</a></li>
                <li><a href ="#">Funko Pop</a></li>
                  <li><a href ="#">Chibi</a></li>
                  <li><a href ="#">Realistas</a></li>
                <li><a href ="#">Anime</a></li>
                <li><a href ="#">Heróis</a></li>
                <li><a href ="#">Star Wars</a></li>
                <li><a href ="#">Promoções</a></li>
                <li><a href ="#">Novidades</a></li>
                <li><a href ="#">Login</a></li>
                <li><a href ="#">Cadastre-se</a></li>
                <li><a href ="#">Sobre</a></li>
                
               
            </ul>
            
        </div>
      <div class="login">
            <label id="Ed" style="color: #5565e4;"></label>
            <div class="divInterno">
            <form action="Login/LoginControle.php" method="POST">
                <input type="text" placeholder="Login" name="login" required><br>
               
                <input type="password" placeholder="Senha" name="senha" required><br>
                <label style="text-align: left; margin-left: -210px;">
                <input type="checkbox" name="checkbox"> Manter-se conectado
                </label> <br>
                <button type="submit" value="Entrar">Entrar</button> <br>
                <a href="Telas/TelaCadastro.php" style="text-decoration: none; text-align: left;">Ainda não tem uma conta? Cadrastre-se</a>
            </form>
            </div>
        </div>
        
        
        
        
        
        
        
        <?php
            /*echo $_SERVER['DOCUMENT_ROOT'];
            require $_SERVER['DOCUMENT_ROOT'].'/ProjetoWeb/vo/Endereco.php';
            require $_SERVER['DOCUMENT_ROOT'].'/ProjetoWeb/dao/EnderecoDAO.php';
            
            $end = new Endereco();
            $end->setBairro('a');
            $end->setRua('a');
            $end->setUf('a');
            $end->setNum('a');
            $end->setCep('a');
            $end->setCidade('a');
            $end->setComplemento('a');
            $dao = new EnderecoDAO();
            $dao->salvar($end);*/
        ?>
    </body>

</html>