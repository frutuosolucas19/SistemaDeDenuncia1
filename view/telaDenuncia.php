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
            textarea {
                height: 100px;
                width: 600px;
            }
            
            

        </style>
    </head>
    <body>
        <img src="logo1.png" width="100%" height="240">

        <fieldset style="width: 50%; margin: -52px auto;"><legend> <h1> <br/>Cadastro de denuncia </h1> </legend>


            <form method="post" action="processaDenuncia.php">
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> Nome do Local</label>
                    <div class="col-sm-8">
                        <input type="text" name="local" class="form-control"  placeholder="Informe o nome do local">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Endereco</label>
                    <div class="col-sm-8">
                        <input type="text" name="endereco" class="form-control"  placeholder="Informe o endereco">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-8">
                        <input type="text" name="telefone" class="form-control"  placeholder="Informe o telefone">
                    </div>
                </div>


                
                <label> Descrição do problema: </label> <br/>
                <div align="center">
                    <textarea name="descricaoProblema" cols='60' rows='6'> </textarea> 
                    <br/>
                    <br/>
                </div>
                <label>Dica de solução:</label> <br/>
                <div align="center">
                    <textarea name="dicaSolucao" cols='60' rows='6'></textarea> <br/>
                    <br/>
                </div>
                <div align="center">
                    <button onclick="window.location.href = 'telaInicial2.php';" type="button" class="btn btn-primary btn-lg">VOLTAR</button>
                    <button type="reset" class="btn btn-primary btn-lg">APAGAR</button>
                    <button  type="submit" class="btn btn-primary btn-lg">SALVAR</button>

                    <br/>
                    <br/>
                </div>
            </form>
        </fieldset>
        <br/>

    </fieldset>

    <br/>
    <br/>

    <label> Desenvolvido por: Lucas de Liz Frutuoso e Matheus Henrique Maas</label> <br/>
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