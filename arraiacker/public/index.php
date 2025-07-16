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

    case '/flag2':
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
    case '/flag1':
        if (!isset($_GET['stm']) || $_GET['stm'] !== 'injetado') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit;
        }
        break;
    case '/gerador_de_relatorio': // Mantive a rota da sua action
        // Verifica se o usuário tem permissão.
        if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'milhao') {
            header('Location: /login?error=4');
            exit;
        }elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['xml_template'])) {
            $xml_data = $_POST['xml_template'];

            // --- DETECÇÃO SEGURA DO ATAQUE XXE ---
            if (str_contains($xml_data, '<!ENTITY') && str_contains($xml_data, 'SYSTEM')) {
                header('Location: /gerador_de_relatorio?resultado=s0c3ss');

            } else {
                header('Location: /gerador_de_relatorio?resultado=f4lh4');

            }
        }
        break;
    case '/flag4':
        if(!isset($_GET['sucesso']) || $_GET['sucesso'] !== '0lt1m4fl4g1') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit;
        }
    break;
    case '/r4d90fl4g':
        if(!isset($_GET['caipira']) || $_GET['caipira'] !== 'canel4linha') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit;
        }
    case '/0lt1m4fr4gr':
        // Verifica se o usuário chegou aqui com a frequência correta.
        if (!isset($_GET['p4r4b3ns']) || $_GET['p4r4b3ns'] !== 'c4ip1r1nh4') {
            header('Location: /login?error=4'); // Erro de "acesso não autorizado".
            exit;
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
if ($request_uri !== "/flag4") {

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
                require_once __DIR__ . '/../view/flags/flag3.php';
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

    case '/flag2':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/flags/flag2.php';
        break;
    case '/dashboardmilhao':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/pages/dashboardmilhao.php';
        break;
    case '/flag1':
        // A lógica de permissão já foi tratada. Se chegamos aqui, o acesso é garantido.
        require_once __DIR__ . '/../view/flags/flag1.php';
        break;
    case '/flag4':
        // A lógica de permissão já foi tratada. Se chegamos aqui,
        require_once __DIR__ . '/../view/flags/flag4.php';
        break;
    case '/r4d90fl4g':
        // A lógica de permissão já foi tratada. Se chegamos aqui,
        require_once __DIR__ . '/../view/pages/r4d90fl4g.php';
        break;
        
    case '/gerador_de_relatorio':
            // Se não for POST, ou não tiver o template, carrega a página de geração de relatório.
        require_once __DIR__ . '/../view/pages/gerador_de_relatorio.php';
        break;
    case '/0lt1m4fr4gr':
        // Se o usuário chegou aqui, significa que ele sintonizou a frequência correta.
        // Carrega a página de sucesso.
        require_once __DIR__ . '/../view/pages/0lt1m4fr4gr.php';
        break;


    default:
        http_response_code(404);
        require_once __DIR__ . '/../view/errors/404.php';
        break;
}

// E finalmente, incluímos o footer.
if ($request_uri !== "/flag4" && $request_uri !== "/r4d90fl4g"  && $request_uri !== "/0lt1m4fr4gr") {

    include_once(__DIR__ . '/../view/include/footer.php');
}
