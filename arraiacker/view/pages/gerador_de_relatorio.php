<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-white mb-4">Gerador de Relatórios Customizados</h1>
    <p class="text-white-300 mb-6">Cole o template XML abaixo para gerar o relatório do evento.</p>

    <form method="POST" action="/gerador_de_relatorio" class="bg-white p-6 rounded shadow-md">
        <div class="mb-4">
            <label for="xml_template" class="block text-gray-700 font-bold mb-2">Template XML:</label>
            <textarea name="xml_template" id="xml_template" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline font-mono" placeholder="Ex: <relatorio><titulo>Vendas</titulo></relatorio>"></textarea>
        </div>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Gerar Relatório
        </button>
    </form>
    <?php 
if (isset($_GET['resultado']) && $_GET['resultado'] === 's0c3ss') {
    // Usando aspas simples (') para o echo, para que as aspas duplas (") do HTML funcionem sem problemas.
    echo '
    <div class="mt-6 bg-yellow-400 text-gray-900 p-6 rounded-lg shadow-2xl border-4 border-yellow-500 text-center">
        <h3 class="font-bold text-2xl mb-2">🎉 Parabéns, Hacker do Sertão! 🎉</h3>
        <p class="mb-4">Sua entidade externa foi processada! Você detectou a falha no nosso parser XML.</p>
        <div class="mt-4">
            <a href="/flag3?sucesso=0lt1m4fl4g1" class="inline-block bg-gray-900 text-yellow-300 font-bold py-3 px-8 rounded-full hover:bg-black">
                Pegar a Última Flag
            </a>
        </div>
    </div>';
} elseif (isset($_GET['resultado']) && $_GET['resultado'] === 'f4lh4') {
    // Adicionei a verificação para 'f4lh4' aqui também, e corrigi o echo.
    echo '
    <div class="mt-6 bg-blue-800 text-white p-4 rounded-lg shadow-lg">
        <h3 class="font-bold">Relatório Processado</h3>
        <p>Relatório gerado, mas nada de interessante encontrado. Continue tentando.</p>
    </div>';
}
?>
</div>