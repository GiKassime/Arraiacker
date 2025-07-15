<?php
// PARTE 1: LÓGICA PHP (Fica no topo)

// Vamos deixar uma variável vazia para guardar a mensagem para o usuário.
$mensagem = "";
$cor_da_mensagem = "red"; // Cor padrão para erro

// Verifica se a página foi carregada por um envio de formulário (método POST).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. Pega o valor que o usuário digitou no campo com name="frequency".
    // Usamos isset() para ter certeza que o campo foi enviado.
    if (isset($_POST['frequency'])) {
        
        $frequencia_enviada = floatval($_POST['frequency']);
        $frequencia_secreta = 177.8;

        // 3. Compara a frequência enviada com a secreta.
        // abs($a - $b) < 0.01 é uma forma segura de comparar números com decimais.
        if (abs($frequencia_enviada - $frequencia_secreta) < 0.01) {
            
            $mensagem = "🎉 Frequência correta! Você sintonizou a rádio Arraiacker!<br> <a href='/0lt1m4fr4gr'>Clique aqui </a>";

        } else {
            // DEU ERRADO! Define a mensagem de estática/erro.
            $mensagem = "📻 Estática... Frequência incorreta. Tente novamente.";
        }
    } else {
        $mensagem = "❌ Nenhuma frequência recebida.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📻 Rádio Arraiacker - CTF</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');
        
        /* Personalização do range input */
        .range-slider {
            -webkit-appearance: none;
            appearance: none;
            background: transparent;
            cursor: pointer;
        }
        
        .range-slider::-webkit-slider-track {
            background: linear-gradient(to right, #1f2937, #374151, #6b7280);
            height: 8px;
            border-radius: 4px;
        }
        
        .range-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            height: 24px;
            width: 24px;
            border-radius: 50%;
            background: #fbbf24;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(251, 191, 36, 0.5);
            transition: all 0.3s ease;
        }
        
        .range-slider::-webkit-slider-thumb:hover {
            background: #f59e0b;
            box-shadow: 0 0 20px rgba(251, 191, 36, 0.8);
        }
        
        .range-slider::-moz-range-track {
            background: linear-gradient(to right, #1f2937, #374151, #6b7280);
            height: 8px;
            border-radius: 4px;
        }
        
        .range-slider::-moz-range-thumb {
            height: 24px;
            width: 24px;
            border-radius: 50%;
            background: #fbbf24;
            cursor: pointer;
            border: none;
            box-shadow: 0 0 10px rgba(251, 191, 36, 0.5);
        }
        
        /* Animações personalizadas */
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 5px rgba(34, 197, 94, 0.5); }
            50% { box-shadow: 0 0 20px rgba(34, 197, 94, 0.8); }
        }
        
        .static-bg {
            background-image: 
                radial-gradient(circle at 1px 1px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 20px 20px;
            animation: static-move 0.5s infinite;
        }
        
        @keyframes static-move {
            0% { background-position: 0 0; }
            100% { background-position: 20px 20px; }
        }
        
        .frequency-scale {
            background: linear-gradient(
                to right,
                #16a34a 0%,
                #ea580c 25%,
                #ca8a04 50%,
                #0891b2 75%,
                #16a34a 100%
            );
            height: 4px;
            border-radius: 2px;
            margin: 10px 0;
        }
    </style>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full mx-auto">
        <!-- Rádio Container -->
        <div class="bg-gray-800 rounded-2xl shadow-2xl overflow-hidden border-4 border-gray-700">
            <!-- Topo do Rádio -->
            <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-4">
                <div class="text-center">
                    <h1 class="text-yellow-400 text-2xl font-bold" style="font-family: 'Orbitron', monospace;">
                        📻 ARRAIACKER RADIO
                    </h1>
                </div>
            </div>
            
            <!-- Display Principal -->
            <div class="bg-black p-6 static-bg">
                <div class="bg-gray-900 rounded-lg p-4 border-2 border-green-500 pulse-glow">
                    <div class="text-center">
                        <div class="text-green-400 text-sm mb-2" style="font-family: 'Orbitron', monospace;">
                            FREQUÊNCIA (MHz)
                        </div>
                        <div id="frequencyDisplay" class="text-green-400 text-4xl font-bold" style="font-family: 'Orbitron', monospace;">
                            88.0
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controles -->
            <div class="bg-gray-800 p-6">
                <form method="POST" action="" class="space-y-6">
                    <!-- Escala de Frequência -->
                    <div class="frequency-scale"></div>
                    
                    <!-- Range Slider -->
                    <div class="space-y-4">
                        <label class="block text-yellow-400 text-sm font-semibold text-center" style="font-family: 'Orbitron', monospace;">
                        </label>
                        <div class="relative">
                            <input 
                                type="range" 
                                id="frequencyRange" 
                                name="frequency" 
                                min="88.0" 
                                max="200.0" 
                                step="0.1" 
                                value="88.0"
                                class="range-slider w-full h-2 bg-gray-700 rounded-lg cursor-pointer"
                                oninput="updateFrequency(this.value)"
                            >
                            <!-- Marcadores na escala -->
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>88.0</span>
                                <span>120.0</span>
                                <span>150.0</span>
                                <span>180.0</span>
                                <span>200.0</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botão Sintonizar -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-black font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg"
                        style="font-family: 'Orbitron', monospace;"
                    >
                        🔊 SINTONIZAR FREQUÊNCIA
                    </button>
                </form>
            </div>
            
            <!-- Resultado -->
            <?php if (!empty($mensagem)) { ?>
                <div class="bg-red-900 border-t-4 border-red-500 p-4">
                    <div class="flex items-center">
                        <div class="text-red-200 text-center w-full" style="font-family: 'Orbitron', monospace;">
                            <?php echo $mensagem; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        
      
    </div>

    <script>
        function updateFrequency(value) {
            document.getElementById('frequencyDisplay').textContent = parseFloat(value).toFixed(1);
            const display = document.getElementById('frequencyDisplay');
            const freq = parseFloat(value);
            
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('frequencyRange');
            updateFrequency(slider.value);
        });
    </script>
</body>
</html>