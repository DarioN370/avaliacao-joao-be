<?php
// Verifica se o ID do filme foi fornecido via GET
if (isset($_GET["id"])) {
    $filme_id = $_GET["id"];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_redecanais";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Processa a exclusão quando o formulário for enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepara a consulta SQL para excluir o filme
        $sql = "DELETE FROM tb_filmes WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $filme_id);

        // Executa a consulta e verifica o resultado
        if ($stmt->execute()) {
            echo "Filme excluído com sucesso!";
        } else {
            echo "Erro ao excluir o filme: " . $stmt->error;
        }

        // Fecha a conexão com o banco de dados
        $conn->close();

        // Redireciona para a página catalogo após a exclusão
        header("Location: catalogo.php");
        exit;
    }
} else {
    echo "ID do filme não fornecido";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Filme</title>
    <link rel="stylesheet" href="assets/css/editar_filme.css">
    <link rel="shortcut icon" href="assets/img/favicon2.webp" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h2>Excluir Filme</h2>
        <form class="container-form" action="excluir_filme.php?id=<?php echo $filme_id; ?>" method="POST">
            <p class="aviso-delete">Tem certeza que deseja excluir este filme?</p>
            <div class="btn-container-delete">
                <div class="form-group">
                    <button class="btn-excluir" type="submit">Excluir</button>
                </div>
                <div class="form-group">
                    <a href="catalogo.php"><button class="btn-voltar" type="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
