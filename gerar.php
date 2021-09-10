<?php
    include('header.php');

    //Verifica se o campo dezenas foi passado no Post e se o campo não está vazio
        
    if(isset($_POST['dezenas']) && ($_POST['dezenas']) !=NULL )
    {
        //atribui à variável $dezenas o valor que foi passado no form
        $dezenas = $_POST['dezenas'];
 

        //verifica se a dezena escolhida está entre 6 e 15 (números permitidos na mega sena)
        if (($dezenas >= 1) && ($dezenas <= 15))
        {
            //para cada dezena digitada, atribuirá uma posição no vetor com números aleatórios de 1 a 60.
            for ($i=1; $i<=$dezenas; $i++)
            {
                $resultado[] = str_pad(rand(1, 60), 2, '0', STR_PAD_LEFT); 
            }
            
            //função para ordenar o resultado
            sort($resultado); 

            echo "<div class='container conteudo'>
                    <div class='row'>
                        <div class='col-md-12'>
                        <img src='imagens/mega-sena-logo.png' alt='logo-mega-sena' id='logo-mega-sena'>
                        <h3>Seu número da sorte é: ".implode('-', $resultado). " </h3>
                    </div>
                  </div>
                  <br>
            <a href='index.php'>Sortear novo número</a>";
     
        }
        else
        {
            
            echo"<div class='container conteudo'>
                    <div class='row'>
                        <div class='col-md-12'>
                        <img src='imagens/mega-sena-logo.png' alt='logo-mega-sena' id='logo-mega-sena'>
                        <h3>Dezena Inválida</h3>
                    </div>
                </div>
                <br>
            <a href='index.php'>Digitar outra dezena</a>";
            
            
        }   
    }



?>