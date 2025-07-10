<?php
// Garante que só seja acessado através do roteador.
if (!defined('ARRAIACKER_CTF')) {
    die('Acesso direto negado!');
}

// 1. A sessão é iniciada para que possamos manipulá-la.
//    (O roteador principal já inicia, mas é bom garantir).
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Apaga todas as variáveis da sessão.
$_SESSION = array();

// 3. Destrói a sessão do servidor.
session_destroy();

// 4. Redireciona o usuário de volta para a página de login.
header("Location: /login");
exit;