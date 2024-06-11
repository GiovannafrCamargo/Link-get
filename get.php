<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>

</head>
<body>
    <div class="container">
        <h1>GET</h1>

        <?php
        //Definir as informações para conexão com o banco
        $servidor = "localhost";
        $usuarios = "root";
        $senha = "";
        $dbnome = "banco";

        //Criar a conexão com o banco
        $conexao = mysqli_connect($servidor,$usuarios, $senha, $dbnome);

        //comandos SQL para consultar 
        $comando_banco = "SELECT * FROM usuarios";

        //executar o comando e armazenar na variavel
        $resultado_tabela = mysqli_query($conexao, $comando_banco);

        //percorrer todos os registros e imprimir na página
        while($linha_registro = mysqli_fetch_assoc($resultado_tabela)){
            //Imprime o nome
            echo "<p>Nome: " . $linha_registro ['nome'] . "</p>";
            //Imprime sobrenome
            echo "<p>Sobrenome: " . $linha_registro ['sobrenome'] . "</p>";
            echo"<hr>";
        }
        //fechar conexão 
        mysqli_close($conexao);
        ?>
    </div>
</body>
</html>
