<?php 
// Definir título da página
$title = "404 - Página Não Encontrada | Arraiácker CTF";?>

    <!-- Página de Erro 404 -->
    <div class=" min-h-screen flex items-center justify-center">
        <section class="container mx-auto text-center py-3">
            <!-- Ícone de Erro -->
            <div class="mb-8">
                <h1 class="text-6xl font-bold text-white mb-4">404</h1>
                <div class="h-2 mx-auto bg-red-400 w-24 rounded-full mb-6"></div>
            </div>
            
            <!-- Mensagem Principal -->
            <div class="max-w-2xl mx-auto mb-8">
                <h2 class="text-4xl font-bold texto-white mb-4">
                    🤠 Opa, parece que você se perdeu na festa Zé da pinga!
                </h2>
                <p class="text-xl text-white mb-6 opacity-90">
                    A página que você está procurando não foi encontrada no nosso arraiá. 
                    Que tal voltar para a festa principal e continuar o desafio hacker?
                </p>
            </div>

            <!-- Área de dicas -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 mx-auto max-w-2xl mb-8">
                <h3 class="text-2xl font-bold mb-4 text-yellow-400">🔍 Dicas para o Hacker:</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                    <div class="bg-gray-800 bg-opacity-50 rounded-lg p-4">
                        <h4 class="font-bold text-white mb-2">🎯 Verificar URL</h4>
                        <p class="text-gray-300 text-sm">Talvez você digitou algo errado na URL?</p>
                    </div>
                    <div class="bg-gray-800 bg-opacity-50 rounded-lg p-4">
                        <h4 class="font-bold text-white mb-2">🕵️ Explorar</h4>
                        <p class="text-gray-300 text-sm">Pode ser que esta seja parte do desafio!</p>
                    </div>
                    <div class="bg-gray-800 bg-opacity-50 rounded-lg p-4">
                        <h4 class="font-bold text-white mb-2">🔗 Links Quebrados</h4>
                        <p class="text-gray-300 text-sm">Algumas páginas podem ter mudado de lugar.</p>
                    </div>
                    <div class="bg-gray-800 bg-opacity-50 rounded-lg p-4">
                        <h4 class="font-bold text-white mb-2">🎪 Voltar à Festa</h4>
                        <p class="text-gray-300 text-sm">Use os botões abaixo para navegar.</p>
                    </div>
                </div>
            </div>

            <!-- Botões de Navegação -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="/" class="flex items-center justify-center">
                        🏠 Voltar ao Início
                    </a>
                </button>
                <button class="bg-green-600 hover:bg-green-700 text-white font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <a href="/login" class="flex items-center justify-center">
                        🎯 Primeira Fase
                    </a>
                </button>
            </div>

            <!-- Informações Adicionais -->
            <div class="max-w-lg mx-auto text-center">
                <p class="text-white text-sm mb-4">
                    <strong>Código do Erro:</strong> 404 - Página Não Encontrada
                </p>
            </div>

        </section>
    </div>


