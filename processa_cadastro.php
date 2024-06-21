<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // CONEXAO COM BANCO DE DADOS padrao
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db_redecanais";

    $conn = new mysqli($servername,$username,$password,$db_name);

    if ($conn->connect_error){
        die("Erro na conexão com o banco e dados:" . $conn->connect_error);
    }

    // captura os dados do formulário e atribui os valores as suas respectivas variaveis 
    $nome = $_POST["nome"];
    $estudio = $_POST["estudio"];
    $categoria = $_POST["categoria"];
    $sinopse = $_POST["sinopse"];

    // sql para inserir os dados coletados na tabela filmes, ele vai inserir nas variaveis, entao quando for fazer a alteração, vai alterar a variavel do respectivo ID
    $sql = "INSERT INTO tb_filmes (nome, estudio, categoria, sinopse) VALUES ('$nome', '$estudio', '$categoria', '$sinopse')";

    if($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar:" . $conn->error;

    
    } 
    $conn->close();
}
?>

<a href="index.php">Voltar</a>


?>