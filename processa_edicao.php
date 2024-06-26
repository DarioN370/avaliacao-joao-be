<?php
// comando para verificar se o filme foi selecionado para a edição
    if(isset($_GET["id"])){
        $filme_id = $_GET["id"];

        //Conexão com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_redecanais";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Erro na conexao com o banco dados: " . $conn->connect_error);
        }

        //obter os dados do cliente para edição
        $sql = "SELECT * FROM tb_filmes WHERE id = $filme_id";
        $result = $conn -> query($sql);

        if($result -> num_rows == 1){
            $row = $result -> fetch_assoc();
        } else {
            echo "Filme não encontrado";
            exit;
        }

        //processa o formulário para edição quando enviado
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $novo_nome = $_POST["nome"];
            $novo_estudio = $_POST["estudio"];
            $novo_categoria = $_POST["categoria"];
            $novo_sinopse = $_POST["sinopse"];

        //atualiza os dados do cliente no banco de dados
            $sql = "UPDATE tb_filmes SET nome = '$novo_nome', estudio = '$novo_estudio', categoria = '$novo_categoria', sinopse = '$novo_sinopse' WHERE id = $filme_id";
        }
    }
?>