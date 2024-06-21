<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon2.webp" type="image/x-icon">
    <title>Catálogo</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/catalogo.css">
</head>
<body>
    <h1>Catálogo de filmes</h1>

    <?php



    //Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_redecanais";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Erro na conexão com o banco dados: " . $conn->connect_error);
        }

        //Verificar se o filme foi excluido

        if (isset($_GET["excluído"]) && $_GET["excluído"] == "true") {
            echo "<p>Cliente excluído com sucesso</p>";
        }


        //Criar um comando SQL para selecionar todos os filmes

        $sql = "SELECT * FROM tb_filmes";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nome</th><th>Estudio</th><th>Categoria</th><th>Sinopse</th><th>Ações</th></tr>";
        

            while ($row = $result -> fetch_assoc()){

                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["estudio"] . "</td>";
                echo "<td>" . $row["categoria"] . "</td>";
                echo "<td>" . $row["sinopse"] . "</td>";
                echo "<td>";
                echo "<a href='editar_cliente.php?id=" . $row["id"] . "'>Editar</a>";
                echo "|";
                echo "<a href='excluir_cliente.php?id=" . $row["id"] . "'>Excluir</a>";
                echo "</td>";
                echo "<tr>";
            }
            echo "</table>";
        } 

        else {
            echo "Nenhu filme cadastrado.";
        }

        $conn->close();




    ?>

</body>
</html>