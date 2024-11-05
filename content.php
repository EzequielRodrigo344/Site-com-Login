<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
</head>
<body>
    <h1>
        <?php
        session_start();

        // if (!isset($_SESSION['name'])) {
        //     include 'logout.php';
        // }

        echo"Seja bem-vindo, " . $_SESSION['name'];
        
        ?>
    </h1>

    <button onclick="window.location.href='logout.php'">Sair</button>
</body>
</html>