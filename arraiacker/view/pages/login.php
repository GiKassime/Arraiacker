<?php
// Verifica se a nossa constante de segurança NÃO está definida
if (!defined('ARRAIACKER_CTF')) {
    // Se não estiver definida, interrompe o script e exibe uma mensagem.
    // Você pode personalizar a mensagem como quiser.
    die('Acesso direto negado, seu curioso!');
}
?>
<!-- Conteúdo principal -->
<div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center justify-center ">

        <!-- Formulário -->
        <div class="w-full lg:w-1/2 max-w-md">
            <div class="form-festa">
                <div class="text-center mb-6">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">🔐 Portal da Barraquinha</h2>
                    <p class="text-gray-600">Acesso restrito aos organizadores do Arraiá</p>
                    <p class="text-sm text-orange-600 mt-2">🎯 Primeira Flag: Encontre uma forma de entrar...</p>
                </div>

                <form class="space-y-6" method="post" action="/login">
                    <div>
                        <label for="username" class="label-festa">👤 Login do Organizador</label>
                        <input type="text" id="username" class="input-festa" placeholder="usuario@arraiacker.com" name="username" required />
                    </div>

                    <div>
                        <label for="password" class="label-festa">🔒 Senha da Barraquinha</label>
                        <input type="password" id="password" class="input-festa" name="password" placeholder="Digite a senha secreta" required />
                    </div>



                    <button type="submit" class="btn-festa w-full">
                        🚀 Entrar na Barraquinha! 🚀
                    </button>


                </form>
            </div>
        </div>

        <!-- Imagem -->
        <div class="w-full lg:w-1/2 lg:pl-12 mt-8 lg:mt-0 text-center">
            <div class="relative">
                <img class="w-full max-w-lg mx-auto drop-shadow-2xl" src="/assets/logoCobra.png" alt="Hacker do Arraiá" />
                <div class="absolute -top-4 -left-4 text-6xl animate-bounce">💻</div>
                <div class="absolute -top-2 -right-2 text-4xl animate-pulse">🌽</div>
                <div class="absolute -bottom-2 -left-2 text-4xl animate-bounce delay-200">🔓</div>
                <div class="absolute -bottom-4 -right-4 text-5xl animate-pulse delay-300">🎯</div>
            </div>
        </div>
    </div>
</div>
<div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                    d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
            </g>
        </g>
    </svg>
</div>
<?php
// Verifica se um erro foi passado pela URL.
if (isset($_GET['error'])) {
    // 1. DEFINIÇÃO DAS VARIÁVEIS DO MODAL
    // Define valores padrão para as variáveis.
    $modalTitulo = "Ops! Algo deu errado";
    $modalMensagem = "Ocorreu um erro inesperado.";
    $modalIcone = "M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"; // Ícone de alerta padrão
    $corHeader = "bg-red-600"; // Cor vermelha para erro padrão

    // 2. SELEÇÃO DA MENSAGEM COM BASE NO CÓDIGO DE ERRO
    // O switch permite adicionar novos tipos de erro facilmente no futuro.
    switch ($_GET['error']) {
        case '1': // Erro de "Usuário ou senha inválidos"
            $modalTitulo = "Acesso Negado";
            $modalMensagem = "O 'caipira' ou a senha que você digitou não foram encontrados em nossos registros. Tente novamente!";
            break;

        case '2': // Erro de "SQL quebrado" (SQL Injection falhou)
            $modalTitulo = "Parabéns, esse usuário existe!";
            $modalMensagem = "Mas ainda não é o usuário certo";
            $corHeader = "bg-yellow-600"; // Amarelo para "quase lá"
            break;
    }
?>

    <div id="error-modal" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">

                <div class="<?= $corHeader ?> px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 <?= str_contains($corHeader, 'red') ? 'text-red-600' : 'text-yellow-600' ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?= $modalIcone ?>" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left flex-1">
                            <h3 class="text-lg leading-6 font-medium text-white" id="modal-title">
                                <?= $modalTitulo ?>
                            </h3>
                        </div>

                        <button onclick="fecharModal()" class="text-white hover:text-gray-200 ml-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                </div>
                <p class="mt-4 text-lg text-gray-700 leading-relaxed">
                    <?= $modalMensagem ?>
                </p>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button onclick="fecharModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function fecharModal() {
            document.getElementById('error-modal').style.display = 'none';
            // Limpa o parâmetro 'error' da URL para não reabrir o modal no refresh
            window.history.replaceState({}, document.title, window.location.pathname);
        }


        // Lógica para fechar o modal com ESC ou clique fora
        const modal = document.getElementById('error-modal');
        modal.addEventListener('click', (e) => {
            if (e.target === modal) fecharModal();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') fecharModal();
        });
    </script>

<?php
} // Fim do if(isset($_GET['error']))
?>