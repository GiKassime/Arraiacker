<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Conexão Docker</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; color: #333; text-align: center; margin-top: 50px; }
        .status { padding: 20px; border-radius: 8px; font-size: 1.2em; font-weight: bold; }
        .success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>
    <h1>Teste de Conexão: WebApp (PHP) ↔ Banco de Dados (MariaDB)</h1>

    <?php
    // O nome do host é o nome do serviço definido no docker-compose.yml!
    $host = 'barraquinha'; 
    
    // Credenciais definidas no environment do serviço 'db'
    $dbname = 'meu_banco';
    $user = 'meu_usuario';
    $pass = 'senha_do_usuario';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        // Configura o PDO para lançar exceções em caso de erro
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo '<div class="status success">CONECTADO AO MARIADB COM SUCESSO! 🎉</div>';
    } catch(PDOException $e) {
        echo '<div class="status error">FALHA NA CONEXÃO: ' . $e->getMessage() . '</div>';
    }
    ?>
</body>
</html>