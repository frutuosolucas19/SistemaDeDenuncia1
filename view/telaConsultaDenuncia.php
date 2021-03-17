<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>AccessibilitReport</title>

        <style>
            h1 {
                color: #010101;
                text-shadow: 1px 1px 1px rgba(1, 1, 1, 0.97);
            }
            h2 {
                color: #010101;
            }

            fieldset{
                border:1px;
                background:LightSteelBlue;
            }

            input{
                color: black;
            }

        </style>
    </head>
    <body>
        <img src="logo1.png" width="100%" height="240">

        <fieldset style="width: 50%; margin: 0px auto;"> <legend> <h1> <br/> Consulta de denúncias realizadas</h1> </legend>
            <div align="center">
                <form method="post" action="processaConsulta.php"> 
                    <div align="center">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Informe seu Nome:</label>
                            <div class="col-sm-6">
                                <input type="text" name="username" class="form-control"  placeholder="Seu nome">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <button onclick="window.location.href = 'telaInicial2.php';" type="button" class="btn btn-primary btn-lg">VOLTAR</button>
                    <button type="submit" class="btn btn-primary btn-lg">PESQUISAR</button>
                </form>
                <br/>
            </div>
        </fieldset>

        <br/>
        <br/>
        <label> Desenvolvido por: Lucas de Liz Frutuoso e Matheus Henrique Maas
        </label> <br/>
        <label>
            Versão: 2.00
        </label>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>