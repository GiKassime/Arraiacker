<?php
// Proteção contra acesso direto e verificação de permissão
if (!defined('ARRAIACKER_CTF')) {
    die('Acesso direto negado!');
}

// Inclui a conexão com o banco de dados
require_once __DIR__ . '/../../config/database.php';

// Função para buscar todos os dados de uma tabela
function fetchAllFromTable($pdo, $tableName) {
    try {
        $stmt = $pdo->query("SELECT * FROM " . $tableName);
        return $stmt->fetchAll();
    } catch (\PDOException $e) {
        // Retorna um erro amigável se a tabela não for encontrada
        return ['error' => 'Não foi possível buscar dados da tabela: ' . $tableName];
    }
}

// Busca os dados de todas as tabelas
$caipiras = fetchAllFromTable($pdo, 'caipira');
$barracas = fetchAllFromTable($pdo, 'barracas');
$produtos = fetchAllFromTable($pdo, 'produtos');
$cronograma = fetchAllFromTable($pdo, 'cronograma_eventos');
$fornecedores = fetchAllFromTable($pdo, 'fornecedores');
$notas_secretas = fetchAllFromTable($pdo, 'notas_secretas');

// Aqui, você pode buscar as credenciais finais do bolodemilho de um arquivo
// e exibi-las como o "prêmio final" do dashboard.
$ssh_user = 'caipira';
$ssh_pass = 'b0l0d3milh0';

?>

<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-white leading-tight">🌽 Dashboard de Controle do Arraiácker 🌽</h1>
        <p class="text-yellow-300 text-lg mt-2">Visão geral de todas as operações do evento. Parabéns, Chefão!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      

        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-bold text-xl text-gray-800 mb-4">👥 Caipiras (Usuários)</h3>
            <div class="overflow-y-auto max-h-64">
                <ul class="space-y-2">
                    <?php foreach ($caipiras as $item): ?>
                        <li class="border-b pb-2">
                            <p class="font-semibold"><?= htmlspecialchars($item['username']) ?></p>
                            <p class="text-sm text-gray-600">Role: <span class="font-mono bg-gray-200 px-2 py-1 rounded-md"><?= htmlspecialchars($item['role']) ?></span></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-bold text-xl text-gray-800 mb-4">🎪 Barracas do Evento</h3>
             <div class="overflow-y-auto max-h-64">
                <ul class="space-y-2">
                    <?php foreach ($barracas as $item): ?>
                        <li class="border-b pb-2">
                            <p class="font-semibold"><?= htmlspecialchars($item['nome_barraca']) ?></p>
                            <p class="text-sm text-gray-600">Tipo: <?= htmlspecialchars($item['tipo']) ?> | Responsável: <?= htmlspecialchars($item['responsavel']) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-bold text-xl text-gray-800 mb-4">🍿 Produtos & Preços</h3>
             <div class="overflow-y-auto max-h-64">
                <ul class="space-y-2">
                    <?php foreach ($produtos as $item): ?>
                        <li class="border-b pb-2">
                            <p class="font-semibold"><?= htmlspecialchars($item['nome_produto']) ?></p>
                            <p class="text-sm text-gray-600">Preço: R$ <?= htmlspecialchars(number_format($item['preco'], 2, ',', '.')) ?> | Estoque: <?= htmlspecialchars($item['estoque']) ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <div class="md:col-span-3 bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-bold text-xl text-gray-800 mb-4">🗓️ Cronograma da Festa</h3>
            <div class="overflow-y-auto max-h-96">
                <table class="w-full text-left">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="p-2  text-black">Horário</th>
                            <th class="p-2  text-black">Evento</th>
                            <th class="p-2  text-black">Local</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cronograma as $item): ?>
                        <tr class="border-b">
                            <td class="p-2 font-mono text-black"><?= htmlspecialchars($item['horario']) ?></td>
                            <td class="p-2 text-black"><?= htmlspecialchars($item['evento']) ?></td>
                            <td class="p-2 text-black"><?= htmlspecialchars($item['localizacao']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="lg:col-span-3 bg-gray-800 text-white rounded-xl shadow-lg p-6 border-2 border-red-500">
            <h3 class="font-bold text-xl text-yellow-300 mb-4">🤫 Notas Secretas dos Organizadores</h3>
            <div class="space-y-4">
                <?php foreach ($notas_secretas as $item): ?>
                    <div>
                        <p class="font-semibold border-b border-gray-600 pb-1"><?= htmlspecialchars($item['titulo']) ?></p>
                        <p class="text-sm text-gray-300 font-mono mt-1 p-2 bg-black rounded-md"><?= htmlspecialchars($item['nota']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div> <div class="text-center mt-12">
        <a href="/logout" class="inline-block bg-red-600 text-white font-bold py-3 px-8 rounded-full hover:bg-red-700 transition-colors duration-300 ease-in-out shadow-lg transform hover:scale-105">
            Encerrar Sessão e Sair do Painel
        </a>
    </div>

</div>