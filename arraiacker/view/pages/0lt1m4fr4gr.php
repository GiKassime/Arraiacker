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

<body class="flex flex-col min-h-screen bg-gray-900 text-white" style="font-family: 'Source Sans Pro', sans-serif;">

   
    <main class="flex-grow flex items-center justify-center p-4 pb-16">
        
        <div class="w-full max-w-4xl bg-gray-900 rounded-2xl shadow-2xl p-6 border-2 border-yellow-500/50 relative overflow-hidden">
            
            <div class="absolute -top-1/2 -left-1/2 w-[200%] h-[200%] bg-gradient-to-r from-blue-500 via-transparent to-purple-600 animate-spin-slow opacity-20"></div>

            <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                
                <div class="flex-shrink-0">
                    <img src="/assets/cobraDancandoCampea.gif" alt="Cobra Dançando a Vitória" class="w-50 h-50 md:w-52 md:h-52 rounded-full border-4 border-gray-400 object-cover shadow-lg">
                </div>

                <div class="flex-grow text-center md:text-left">
                    <h3 class="font-bold text-3xl text-yellow-300 mb-2">
                        🏆 PARABÉNS, MESTRE CAIPIRA, VOCỄ CHEGOU AO FINAL! 🏆
                    </h3>
                </div>

            </div>
        </div>

    </main>

    <footer class="bg-white text-black">
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