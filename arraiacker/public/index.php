<?php
// =================================================================
// SEÇÃO 1: INICIALIZAÇÃO E LÓGICA (SEM NENHUM HTML)
// =================================================================

// Inicia a sessão e define a constante de segurança.
define('ARRAIACKER_CTF', true);
session_start();

// Pega a URL que o usuário digitou.
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Roteador de Ações: Lida com requisições que processam dados e redirecionam.
switch ($request_uri) {
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Se for um POST para /login, executa a ação e o script termina.
            require_once __DIR__ . '/../actions/login_action.php';
            exit; // O exit é crucial aqui.
        }
        break; // Continua para a seção de renderização se for GET.

    case '/flag1':
        // Se o usuário não estiver logado ou não for o 'coronel.cascavel', redireciona.
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['username'] !== 'coronel.cascavel@arraiacker.com') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit; // O script para aqui, ANTES de qualquer HTML.
        }
        break; // Continua para a seção de renderização se o acesso for permitido.

    case '/dashboardmilhao':
        if (!isset($_GET['quentao']) || $_GET['quentao'] !== 'quentinho') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit;
        }
        break;
    case '/flag4':
        if (!isset($_GET['stm']) || $_GET['stm'] !== 'injetado') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit;
        }
        break;
    case '/gerar_relatorio': // Mantive a rota da sua action
    // Verifica se o usuário tem permissão.
    if (!isset($_SESSION['loggedin']) || $_SESSION['username'] !== 'milhão') {
        header('Location: /login?error=4');
        exit;
    }

    $resultado_html = ''; // Variável para guardar o HTML do resultado.

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['xml_template'])) {
        $xml_data = $_POST['xml_template'];
        
        // --- DETECÇÃO SEGURA DO ATAQUE XXE ---
        if (str_contains($xml_data, '<!ENTITY') && str_contains($xml_data, 'SYSTEM')) {
            // SUCESSO! O jogador tentou o XXE. Prepara o HTML da vitória.
            $resultado_html = '
            <div class="mt-6 bg-yellow-400 text-gray-900 p-6 rounded-lg shadow-2xl border-4 border-yellow-500 text-center">
                <h3 class="font-bold text-2xl mb-2">🎉 Parabéns, Hacker do Sertão! 🎉</h3>
                <p class="mb-4">Sua entidade externa foi processada! Você detectou a falha no nosso parser XML.</p>
                <div class="mt-4">
                    <a href="/a_festa_acabou_pegue_seu_premio" class="inline-block bg-gray-900 text-yellow-300 font-bold py-3 px-8 rounded-full hover:bg-black">
                        Pegar a Última Flag
                    </a>
                </div>
            </div>';
        } else {
            // FALHA: XML normal. Prepara o HTML de feedback padrão.
            $resultado_html = '
            <div class="mt-6 bg-blue-800 text-white p-4 rounded-lg shadow-lg">
                <h3 class="font-bold">Relatório Processado</h3>
                <p>Relatório gerado, mas nada de interessante encontrado. Continue tentando.</p>
            </div>';
        }
    }
    
    // --- Renderização da Página ---
    // Incluímos o header e o footer manualmente para ter controle total.
    include_once __DIR__ . '/../view/include/header.php';
    
    // Mostra o formulário.
    include_once __DIR__ . '/../view/pages/gerador.php';

    // Mostra o resultado (se houver).
    echo $resultado_html;

    include_once __DIR__ . '/../view/include/footer.php';
    
    // Termina a execução.
    exit;



    case '/logout':
        require_once __DIR__ . '/../actions/logout.php';
        exit;
        break;
}


// =================================================================
// SEÇÃO 2: RENDERIZAÇÃO DA PÁGINA (APENAS HTML E VIEWS)
// =================================================================
// Se o script chegou até aqui, significa que nenhuma ação de redirecionamento foi tomada
// e estamos prontos para desenhar a página.

// Agora, e somente agora, incluímos o header.
if ($request_uri !== "/flag3") {

    include_once(__DIR__ . '/../view/include/header.php');
}

// Roteador de Views: Decide qual conteúdo HTML mostrar.
switch ($request_uri) {
    case '/':
        $headers = getallheaders();

        // Verifica se o nosso cabeçalho customizado existe
        if (isset($headers['X-Auth-Token'])) {
            $token = $headers['X-Auth-Token'];

            // Verifica se o token decodificado é o que esperamos
            if ($token === '0C0r0n3ln403ntr4p3l4p0rt4d4fr3nt3') {
                // SUCESSO! O usuário está autenticado.
                // Carrega a página do painel de admin.
                require_once __DIR__ . '/../view/flags/flag2.php';
                exit; // Encerra para não carregar mais nada.
            }
        } else {
            require_once __DIR__ . '/../view/pages/home.php';
        }
        break;

    case '/login':
        // A lógica de POST já foi tratada. Aqui só chegamos com GET.
        require_once __DIR__ . '/../view/pages/login.php';
        break;

    case '/flag1':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/flags/flag1.php';
        break;
    case '/dashboardmilhao':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/pages/dashboardmilhao.php';
        break;
    case '/flag3':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/flags/flag3.php';
        break;
    case '/flag4':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/flags/flag4.php';
        break;
    case '/gerador_de_relatorio':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso
        require_once __DIR__ . '/../view/pages/gerador_de_relatorio.php';
        break;



    default:
        http_response_code(404);
        require_once __DIR__ . '/../view/errors/404.php';
        break;
}

// E finalmente, incluímos o footer.
if ($request_uri !== "/flag3") {

    include_once(__DIR__ . '/../view/include/footer.php');
}
