<?php
// Proteção contra acesso direto
if (!defined('ARRAIACKER_CTF')) {
    die('Acesso direto negado!');
}

// Inclui nosso script de conexão com o banco
require_once __DIR__ . './../config/database.php';

// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // --- A VULNERABILIDADE ESTÁ AQUI ---
    // A consulta SQL é montada como uma simples string, concatenando
    // diretamente o que o usuário digitou. Isso permite a injeção.
        $sql = "SELECT id, username, password FROM caipira WHERE username = '$username' AND password = '$password' LIMIT 1";


    try {
        // Consulta vulneravel
        $stmt = $pdo->query($sql);
        $user = $stmt->fetch();

        if ($user) {
            // Se a consulta retornar um usuário, o login é bem-sucedido!
            // Iniciamos a sessão e guardamos a informação
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            if ($user['username'] === 'coronel.cascavel@arraiacker.com' && $user['password'] === 'pinhão') {
                $_SESSION['username'] = $user['username'];
                header("Location: /flag1");
                exit;
            }else{
                // Redirecion  a para a modal comum
                header("Location: /login?error=2");
                exit;
            } 
            exit;
        } else {
            // Se não encontrar usuário, redireciona de volta para o login com erro
            header("Location: /login?error=1");
            exit;
        }

    } catch (\PDOException $e) {
        // Se a SQL injetada quebrar a query, o participante pode ver um erro do PDO.
        // Isso é uma pista valiosa no CTF!
        // Para dificultar, você pode redirecionar para uma página de erro genérica.
        header("Location: /login");
        exit;
    }
} else {
    // Se não for POST, volta pra home.
    header('Location: /');
    exit;
}