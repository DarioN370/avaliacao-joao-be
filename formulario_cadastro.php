<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon2.webp" type="image/x-icon">
    <title>Adicionar Filme</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/formulario_cadastro.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de filmes</h2>
        <form action="processa_cadastro.php" method="POST">
            <div class="container-inputs">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="estudio">Estúdio:</label>
                    <input type="text" id="estudio" name="estudio" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Categoria:</label>
                    <input type="text" id="categoria" name="categoria" required>
                </div>
                
                <div class="form-group">
                    <label for="descricao">Sinopse:</label>
                    <textarea id="sinopse" name="sinopse" rows="7" required></textarea>
                </div>
            </div>
            

            <div class="form-group">
                <a href=""><button type="submit">Cadastrar</button></a>
            </div>
            <div class="form-group">
                <a href="index.php"><button type="button">Voltar</button></a>
            </div>
        </form>
    </div>
    
</body>
</html>