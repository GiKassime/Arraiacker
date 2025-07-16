<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title ?? 'Arraiácker CTF' ?></title>
    <meta name="description" content="Desafio CTF temático de Festa Junina" />
    <link rel="stylesheet" href="/dist/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow {
            animation: spin-slow 10s linear infinite;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-900 text-white flex flex-col" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center p-4">
        
        <div class="w-full max-w-4xl bg-gray-900 rounded-2xl shadow-2xl p-8 border-2 border-yellow-500/50 relative overflow-hidden">
            
            <!-- Efeito de fundo girando -->
            <div class="absolute -top-1/2 -left-1/2 w-[200%] h-[200%] bg-gradient-to-r from-blue-500 via-transparent to-purple-600 animate-spin-slow opacity-20"></div>

            <!-- Conteúdo principal -->
            <div class="relative z-10 flex flex-col items-center text-center space-y-8">
                
                <!-- GIF da cobra (maior e em cima) -->
                <div class="flex-shrink-0">
                    <img src="/assets/cobraDancandoCampea.gif" alt="Cobra Dançando a Vitória" class="w-96 h-96 rounded-full object-cover shadow-2xl">
                </div>

                <!-- Texto embaixo -->
                <div class="space-y-6">
                    <h3 class="font-bold text-4xl text-yellow-300 mb-4">
                        🏆 PARABÉNS, MESTRE CAIPIRA! 🏆
                    </h3>
                    
                    <h4 class="font-bold text-2xl text-green-400 mb-4">
                        VOCÊ CHEGOU AO FINAL!
                    </h4>
                    
                    <div class="bg-black/50 rounded-lg p-6 border border-yellow-500/50">
                        <p class="text-lg text-gray-300 mb-4">
                            🎪 Você completou todos os desafios do <strong>Arraiácker CTF</strong>!
                        </p>
                        
                        <div class="bg-gray-800 p-4 rounded-lg border border-green-500">
                            <p class="text-green-400 font-mono text-xl">
                                🎯 ARRAIACKER{f1n4l_fl4g_m4st3r_c0mpl3t3d_2025}
                            </p>
                        </div>
                        
                        <p class="text-sm text-gray-400 mt-4">
                            🔥 Parabéns 
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Footer fixo embaixo -->
    <footer class="bg-white text-black mt-auto">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-4">
                <div class="flex-1 mb-6">
                    <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                        🎪 ARRAIÁCKER CTF
                    </a>
                    <p class="text-gray-600 mt-2">Desafio de Cybersecurity com tema junino</p>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">🔗 Links</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Docker Hub</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">GitHub</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">👨‍💻 Desenvolvedor</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Sobre o Projeto</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-300 py-4">
            <p class="text-center text-gray-600">
                🎪 Arraiácker CTF 2025 - Desafio de Docker e Cybersecurity | Criado por <strong>Kassime</strong>
            </p>
        </div>
    </footer>
</body>
</html>