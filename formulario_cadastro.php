<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon2.webp" type="image/x-icon">
    <title>Adicionar Filme</title>
    <link rel="stylesheet" href="assets/css/formulario_cadastro.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de filmes</h2>
        <form class="container-form" action="processa_cadastro.php" method="POST">
            <div class="container-inputs">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="txt-area" type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="estudio">Estúdio:</label>
                    <input class="txt-area" type="text" id="estudio" name="estudio" required>
                </div>

                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input class="txt-area" type="text" id="categoria" name="categoria" required>
                </div>
                
                <div class="form-group">
                    <label for="descricao">Sinopse:</label>
                    <textarea class="txt-area" id="sinopse" name="sinopse" rows="7" required></textarea>
                </div>
            </div>
            
            <div class="btn-container">
                <div class="form-group">
                    <a href=""><button class="btn-cadastrar" type="submit">Cadastrar</button></a>
                </div>
                <div class="form-group">
                    <a href="index.php"><button class="btn-enviar" type="button">Voltar</button></a>
                </div>
            </div>
            
        </form>
    </div>
    
</body>
</html>