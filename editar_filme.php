<?php
// comando para verificar se o filme foi selecionado para a edição
if (isset($_GET["id"])) {
    $filme_id = $_GET["id"];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_redecanais";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Obter os dados do cliente para edição
    $sql = "SELECT * FROM tb_filmes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $filme_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Filme não encontrado";
        exit;
    }

    // Processa o formulário para edição quando enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $novo_nome = $_POST["nome"];
        $novo_estudio = $_POST["estudio"];
        $novo_categoria = $_POST["categoria"];
        $novo_sinopse = $_POST["sinopse"];

        // Atualiza os dados do cliente no banco de dados
        $sql = "UPDATE tb_filmes SET nome = ?, estudio = ?, categoria = ?, sinopse = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssii", $novo_nome, $novo_estudio, $novo_categoria, $novo_sinopse, $filme_id);

        if ($stmt->execute()) {
            echo "";
        } else {
            echo "Erro ao atualizar o filme: " . $stmt->error;
        }
    }
    $conn->close();
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
    <title>Editar</title>
    <link rel="stylesheet" href="assets/css/editar_filme.css">
    <link rel="shortcut icon" href="assets/img/favicon2.webp" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h2>Editar Filme</h2>
        <form class="container-form" action="editar_filme.php?id=<?php echo $filme_id; ?>" method="POST">
            <div class="container-inputs">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="txt-area" type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($row['nome']); ?>" required>
                </div>

                <div class="form-group">
                    <label for="estudio">Estúdio:</label>
                    <input class="txt-area" type="text" id="estudio" name="estudio" value="<?php echo htmlspecialchars($row['estudio']); ?>" required>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input class="txt-area" type="text" id="categoria" name="categoria" value="<?php echo htmlspecialchars($row['categoria']); ?>" required>
                </div>
                    
                <div class="form-group">
                    <label for="sinopse">Sinopse:</label>
                    <textarea class="txt-area" id="sinopse" name="sinopse" rows="7" required><?php echo htmlspecialchars($row['sinopse']); ?></textarea>
                </div>
            </div>
                
            <div class="btn-container">
                <div class="form-group">
                    <button class="btn-editar" type="submit">Editar</button>
                </div>
                <div class="form-group">
                    <a href="index.php"><button class="btn-enviar" type="button">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
