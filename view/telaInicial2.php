<?php
$conexao = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexao, "projeto");
session_start();
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>AccessibilitReport</title>

        <style>
            .painelTexto{
                position: absolute;
                width: 900px;
                height: auto;
                background-color: buttonface;
                left: 50%;
                top: 74.6%;
                transform: translate(-50%, -60%);
            }

            .painelBotao{
                margin: 0 auto;
                width: 720px;
                height: auto;
                padding: 10px;
                background-color: darkblue;
            }
            h1 {
                color: #010101;
                text-shadow: 1px 1px 1px rgba(1, 1, 1, 0.97);
            }
            h2 {
                color: #010101;
            }

            body {
                background-color: white;
            }

            .label1 {
                position: absolute;
                left: 0%;
                top: 96%;
            }
            .label2 {
                position: absolute;
                left: 0%;
                top: 100%;
            }

        </style>
    </head>
    <body>
        <img src="logo1.png" width="100%" height="240"> 

        <fieldset style="width: 50%; margin: 0px auto;" >
            <div class="painelTexto"> 
                <h1> Qual o propósito desse site? </h1>

                <h2>  Este canal é voltado exclusivamente para denúncias de locais que não possuem acessibilidade.<br/>
                    Exemplo: Locais que não possuem rampa de acesso, elevador, banheiro adaptado, etc. </h2>
                <h2> <strong>Lembre-se: denúncia falsa é crime!!!</strong> (CP, art. 339 e art. 340). </h2>
                <div/>
                <br/>


                <div class="painelBotao" align="center">
                    <button onclick="window.location.href = 'telaDenuncia.php';" type="button" class="btn btn-primary btn-lg">Cadastro de Denúncias</button>
                    <button onclick="window.location.href = 'telaConsultaDenuncia.php';" type="button" class="btn btn-primary btn-lg">Consulta de denúncias</button>
                    <button onclick="window.location.href = 'telaSuporte.php';" type="button" class="btn btn-primary btn-lg">Suporte</button>
                    <button onclick="window.location.href = 'logout.php';" type="button" class="btn btn-primary btn-lg">Logout</button>
                    <div/> 

                    </fieldset>
                    <label class="label1"> Desenvolvido por: Lucas de Liz Frutuoso e Matheus Henrique Maas</label> <br/>
                    <label class="label2">
                        Versão: 2.00
                    </label>


                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                    </body>

                    </html>