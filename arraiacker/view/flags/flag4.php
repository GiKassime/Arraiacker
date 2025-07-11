<?php


require_once __DIR__ . './../../config/database.php';

$stmt_tables = $pdo->query("SHOW TABLES");
$tables = $stmt_tables->fetchAll(PDO::FETCH_ASSOC);

$sqlinjection = "SELECT * FROM caipira ";
$stmt_injection = $pdo->query($sqlinjection);
$injection_result = $stmt_injection->fetchAll(PDO::FETCH_ASSOC);

// Agora, começamos a imprimir a página HTML com Tailwind
?>


    <div class="w-screen  bg-slate-800/50 backdrop-blur-sm border border-cyan-500/30 rounded-2xl shadow-2xl shadow-cyan-500/10 overflow-hidden">
        <div class="p-8 border-b border-slate-700">
            <h1 class="text-4xl font-bold text-red-400 flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1.75-4.25a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" /></svg>
                Acesso Não Autorizado Detectado
            </h1>
            <p class="mt-2 text-lg text-white-400">Hmmm, um caipira curioso... Parece que você encontrou algo que não devia.</p>
        </div>

        <div class="p-8 flex space-x-8">
    <div class="flex-1">
        <h2 class="text-2xl font-semibold text-white mb-3">Recompensa: Nomes das Tabelas</h2>
        <p class="mb-4 text-slate-300">Você conseguiu injetar um comando SQL. Como prêmio pela sua astúcia, aqui estão os nomes das tabelas do nosso sistema. Use com sabedoria!</p>
        <div class="bg-black/50 rounded-lg p-4 border border-slate-700">
            <pre class="text-green-400 text-sm overflow-x-auto"><?php print_r($tables); ?></pre>
        </div>
    </div>

    <div class="flex-1">
        <h2 class="text-2xl font-semibold text-white mb-3">Resultado da sua Exploração</h2>
        <p class="mb-4 text-slate-300">Executamos uma consulta na tabela `caipira` usando seu input. Veja o que encontramos:</p>
        <div class="bg-black/50 rounded-lg p-4 border border-slate-700">
            <pre class="text-red-400 text-sm overflow-x-auto">
<?php 
// Verifica se a consulta retornou algo antes de imprimir
if (empty($injection_result)) {
    echo "Nenhum caipira encontrado ";
} else {
    print_r($injection_result);
}
?>
                    </pre>
                </div>
            </div>

        </div>

        <div class="p-8 border-t border-slate-700 text-center">
            <p class="text-white-500">Você pode tentar explorar mais, mas cuidado com os caipiras!</p>
        </div>
    </div>


