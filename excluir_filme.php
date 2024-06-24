<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>teste</h1>
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





    ?>






</body>
</html>

