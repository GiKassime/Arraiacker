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
        }
        break;
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
if($request_uri !== "/flag3"){

    include_once (__DIR__ . '/../view/include/header.php');
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
        }else{
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
    

    default:
        http_response_code(404);
        require_once __DIR__ . '/../view/errors/404.php';
        break;
}

// E finalmente, incluímos o footer.
if($request_uri !== "/flag3"){

    include_once (__DIR__ . '/../view/include/footer.php');
}
