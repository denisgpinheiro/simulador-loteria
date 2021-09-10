<?php include('header.php');?>

<DOCTYPE html>

<html>
    <head>
        <title>Simulador Loteria</title>
    </head>

    <body>

    <div class="container conteudo">
        <div class="row">
            <div class="col-md-12">
            <img src="imagens/mega-sena-logo.png" alt="logo-mega-sena" id="logo-mega-sena">
            <h3>Digite o número de dezenas que você deseja jogar (De 6 a 15):</h3>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-12">
            <form action="gerar.php" method="post">
                <input type="text" name="dezenas" required />
                <input type="submit" name="enviar" value="Gerar número da sorte">
            </form>  
            </div>  
        </div>   

        <div class="row">
            <div class="col-md-12">                
                <div class="instrucoes">
                <h4>Instruções</h4>
                    <p>Escolha de 1 a 15 dezenas (Este é o número permitido na Mega Sena)</p>
                    <p>O jogo padrão da mega-sena, contempla 6 dezenas</p>
                </div>
            </div>  
        </div>  

    </div> 

    <footer>
        <p>Desenvolvido por: Denis Gustavo Pinheiro</p>
    </footer>

    </body>
</html>


