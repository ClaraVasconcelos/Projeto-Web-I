<html>
    <head>
        <style>
            body {
               background-image: url("../img/tela.jpg");
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
            label{
                padding: 15px 15px;
                text-align: right;
            }
            #Ed{
                font-size: 50px;
                font-family: serif;
            }
            .cadastrarProduto{
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
                height: 480px;
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
          
        </style>
    </head>
    <body>
       
        
      <div class="cadastrarProduto">
            <label id="Ed" style="color: #5565e4;"></label>
            
            <div class="divInterno">
            <form action="Login/LoginControle.php" method="POST">
                <h2>Cadastrar Produto</h2>
                <label >Origem:</label><input type="text" placeholder="Origem" name="origem" required><br>
                <label>Quantidade:</label><input type="text" placeholder="Quantidade" name="quantidade" required><br>
                <label>Preço:</label><input type="text" placeholder="Preço" name="preco" required><br>
                <label>Nome:</label><input type="text" placeholder="Nome" name="nome" required><br>
                <label>Descrição:</label><input type="text" placeholder="Descrição" name="descricao" required><br>
                <label>Tipo:</label><input type="text" placeholder="Tipo" name="tipo" required><br>
                <label>Personagem:</label><input type="text" placeholder="Personagem" name="personagem" required><br>
                <button type="submit" value="Cadastrar">Cadastrar</button> <br>
            </form>
            </div>
        </div>
        <a href="CadastrarProduto.php"></a>
        
        
        
        
        
        
        
        <?php

        ?>
    </body>

</html>