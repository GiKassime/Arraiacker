<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Arraiácker CTF - Festa Junina Hacker</title>
    <meta name="description" content="Desafio CTF temático de Festa Junina" />
    <meta name="keywords" content="ctf, hacker, festa junina, arraiá, cybersecurity" />
    <meta name="author" content="Kassime" />
    <link rel="stylesheet" href="./dist/output.css" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One:wght@400&family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body class="leading-normal tracking-normal text-white gradient-festa min-h-screen" style="font-family: 'Source Sans Pro', sans-serif;">
    
    <!-- Header com bandeirolas -->
    <header class="header-festa">
        <div class="bandeirolas"></div>
        <div class="container mx-auto px-4">
            <h1 class="title-festa">🎪 ARRAIÁCKER CTF 🎪</h1>
            <p class="text-xl mt-2 font-medium">Bem-vindo ao maior desafio hacker junino!</p>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center justify-center min-h-screen">
            
            <!-- Formulário -->
            <div class="w-full lg:w-1/2 max-w-md">
                <div class="form-festa">
                    <div class="text-center mb-6">
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">🔐 Portal da Barraquinha</h2>
                        <p class="text-gray-600">Acesso restrito aos organizadores do Arraiá</p>
                        <p class="text-sm text-orange-600 mt-2">🎯 Primeira Flag: Encontre uma forma de entrar...</p>
                    </div>
                    
                    <form class="space-y-6">
                        <div>
                            <label for="email" class="label-festa">👤 Login do Organizador</label>
                            <input type="text" id="email" class="input-festa" placeholder="usuario@arraiacker.com" required />
                        </div>
                        
                        <div>
                            <label for="password" class="label-festa">🔒 Senha da Barraquinha</label>
                            <input type="password" id="password" class="input-festa" placeholder="Digite a senha secreta" required />
                        </div>
                        
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" class="checkbox-festa" />
                            <label for="remember" class="ml-3 text-sm font-medium text-gray-700">🎭 Manter acesso ativo</label>
                        </div>
                        
                        <button type="submit" class="btn-festa w-full">
                            🚀 Hackear a Barraquinha! 🚀
                        </button>
                        
                        <div class="text-center mt-4">
                            <p class="text-sm text-gray-600">
                                Esqueceu a senha? 
                                <a href="#" class="text-orange-600 hover:text-orange-800 font-semibold">Tente um SQL Injection! 😉</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Imagem -->
            <div class="w-full lg:w-1/2 lg:pl-12 mt-8 lg:mt-0 text-center">
                <div class="relative">
                    <img class="w-full max-w-lg mx-auto drop-shadow-2xl" src="./src/Gemini_Generated_Image_9x3zbi9x3zbi9x3z-removebg-preview.png" alt="Hacker do Arraiá" />
                    <div class="absolute -top-4 -left-4 text-6xl animate-bounce">💻</div>
                    <div class="absolute -top-2 -right-2 text-4xl animate-pulse">🌽</div>
                    <div class="absolute -bottom-2 -left-2 text-4xl animate-bounce delay-200">🔓</div>
                    <div class="absolute -bottom-4 -right-4 text-5xl animate-pulse delay-300">🎯</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de Desafios -->
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                🎪 Desafios do Arraiácker
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        🎯 Objetivo do CTF
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Explore as vulnerabilidades da aplicação web para descobrir as flags escondidas! 
                        Cada contêiner possui segredos únicos que te levarão ao próximo nível.
                        <br /><br />
                        <strong>Dica:</strong> Nem sempre o que parece é o que é...
                        <br />
                        <em class="text-orange-600">🔍 Procure por pistas nos formulários!</em>
                    </p>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <div class="bg-gradient-to-r from-orange-400 to-red-500 rounded-lg p-4 text-white">
                        <h4 class="font-bold text-lg mb-2">⚡ Status do Sistema</h4>
                        <p class="text-sm">🟢 Barraquinha (DB): Online</p>
                        <p class="text-sm">🟡 Arraiácker (Web): Vulnerável</p>
                        <p class="text-sm">🔴 Fase Final (SSH): Bloqueado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Containers -->
    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                🐳 Containers do Desafio
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            
            <!-- Container 1: Barraquinha -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="flex flex-wrap no-underline">
                        <p class="w-full text-green-600 text-xs md:text-sm px-6 font-bold">
                            🗄️ BANCO DE DADOS
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Barraquinha MySQL
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Contém informações secretas dos organizadores. Explore as vulnerabilidades de SQL Injection para descobrir a senha do próximo nível!
                        </p>
                    </div>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-start">
                        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            🎯 Explorar
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Container 2: Arraiácker -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="flex flex-wrap no-underline">
                        <p class="w-full text-blue-600 text-xs md:text-sm px-6 font-bold">
                            🌐 APLICAÇÃO WEB
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Portal Arraiácker
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Interface web principal com formulário de login vulnerável. Sua missão é bypasser a autenticação e descobrir os segredos escondidos!
                        </p>
                    </div>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            🔓 Hackear
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Container 3: Fase Final -->
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <div class="flex flex-wrap no-underline">
                        <p class="w-full text-red-600 text-xs md:text-sm px-6 font-bold">
                            🔐 SERVIDOR SSH
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            BolodeMil (Fase Final)
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            O desafio final! Servidor SSH com credenciais criptografadas. Só os verdadeiros hackers do arraiá conseguem chegar até aqui!
                        </p>
                    </div>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-end">
                        <button class="mx-auto lg:mx-0 hover:underline bg-gray-400 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg cursor-not-allowed opacity-50">
                            🔒 Bloqueado
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="container mx-auto text-center py-6 mb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            🎊 Aceite o Desafio!
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
            Prove que você é o melhor hacker do arraiá! 🏆
        </h3>
        <p class="text-xl mb-6 opacity-90">
            Explore, hackeie e descubra todas as flags escondidas nos containers!
        </p>
        <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            🚀 Começar Agora!
        </button>
    </section>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6 text-black">
                    <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                        🎪 ARRAIÁCKER CTF
                    </a>
                    <p class="text-gray-600 mt-2">Desafio de Cybersecurity com tema junino</p>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">🎯 Desafios</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">SQL Injection</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Web Hacking</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">SSH Bruteforce</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">📋 Regras</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Termos de Uso</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Código de Conduta</a>
                        </li>
                    </ul>
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
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Documentação</a>
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
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Portfolio</a>
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