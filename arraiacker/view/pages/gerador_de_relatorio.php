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
   
</div>