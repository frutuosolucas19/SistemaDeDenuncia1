<!DOCTYPE html>
<?php
$conexao = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexao, "projeto");
session_start();
$idUsuario  = $_SESSION["idUsuario"];
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='telaInicial2.php'", 2000);
            }

        </script>
        <?php
   
        $descricaoProblema = $_POST["descricaoProblema"];
        $dicaSolucao = $_POST["dicaSolucao"];
        $local = $_POST["local"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];

        $inserir = "INSERT INTO denuncia (descricaoProblema, dicaSolucao, local, endereco, telefone, Usuario_id, Status_id) 
        VALUES ('$descricaoProblema', '$dicaSolucao','$local', '$endereco','$telefone','$idUsuario','1');";
        mysqli_query($conexao, $inserir) or die(mysqli_error($conexao));
        echo"Denuncia cadastrada com sucesso. Redirecionando para tela inicial em 1 segundos.";
        echo"<script language='javascript'>sucesso()</script";
        ?>
    </body>
</html>