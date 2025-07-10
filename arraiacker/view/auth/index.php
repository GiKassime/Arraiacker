<?php 
include_once (__DIR__.'/../include/header.php');
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
                            🚀 Entrar na Barraquinha! 🚀
                        </button>
                        
                        <div class="text-center mt-4">
                            <p class="text-sm text-gray-600">
                                Esqueceu a senha? 
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Imagem -->
            <div class="w-full lg:w-1/2 lg:pl-12 mt-8 lg:mt-0 text-center">
                <div class="relative">
                    <img class="w-full max-w-lg mx-auto drop-shadow-2xl" src="./../../src/Gemini_Generated_Image_9x3zbi9x3zbi9x3z-removebg-preview.png" alt="Hacker do Arraiá" />
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
//incluir o footer
include_once (__DIR__.'/../include/footer.php');
?>