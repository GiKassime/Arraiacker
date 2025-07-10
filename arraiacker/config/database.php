<?php
// Proteção contra acesso direto
if (!defined('ARRAIACKER_CTF')) {
    die('Acesso direto negado!');
}

// Credenciais do banco de dados, baseadas no seu docker-compose.yaml
$host = 'barraquinha';       // O nome do serviço do banco no docker-compose
$dbname = 'barraquinha';     // O nome do banco de dados (MYSQL_DATABASE)
$user = 'cobrita';           // O usuário (MYSQL_USER)
$pass = 'temumabotanaminhacobra'; // A senha (MYSQL_PASSWORD)
$charset = 'utf8mb4';

// Configurações do PDO (PHP Data Objects)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Tenta criar uma nova instância do PDO (a conexão)
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Em um app real, você logaria o erro. Aqui, podemos mostrar uma mensagem genérica.
    // O ideal no CTF é não dar muitas dicas, então um erro genérico é bom.
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
    // Ou simplesmente: die("Ops! A barraquinha de milho está fechada. Tente mais tarde.");
}