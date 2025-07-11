-- Garante que o banco de dados 'barraquinha' exista e o seleciona.
CREATE DATABASE IF NOT EXISTS barraquinha;
USE barraquinha;

-- ===================================================================
-- Tabela de Usuários (ALVO REAL DO SQL INJECTION)
-- ===================================================================
CREATE TABLE caipira (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'user'
);

-- Insere os usuários, incluindo o alvo 'coronel.cascavel'.
INSERT INTO caipira (username, password, role) VALUES ('maria.pipoca@arraiacker.com', 'pipoquinha123', 'user');
INSERT INTO caipira (username, password, role) VALUES ('chico.quentao@arraiacker.com', 'adorofesta', 'admin');
INSERT INTO caipira (username, password, role) VALUES ('ana.canjica@arraiacker.com', 'milhoverde', 'guest');
INSERT INTO caipira (username, password, role) VALUES ('pedro.pescador@arraiacker.com', 'ganheiapeixaria', 'user');
INSERT INTO caipira (username, password, role) VALUES ('rosinha.correio@arraiacker.com', 'elegante2024', 'guest');
INSERT INTO caipira (username, password, role) VALUES ('gerente.barraca@arraiacker.com', 'faturamentoalto', 'admin');
INSERT INTO caipira (username, password, role) VALUES ('suporte.ti@arraiacker.com', 'resetar@123', 'support');
INSERT INTO caipira (username, password, role) VALUES ('coronel.cascavel@arraiacker.com', 'pinhão', 'amaiscaipiradetodas');

-- ===================================================================
-- TABELAS DE DISTRAÇÃO (RUÍDO PARA O HACKER)
-- ===================================================================

-- Tabela para gerenciar as barracas do evento.
CREATE TABLE barracas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_barraca VARCHAR(100) NOT NULL,
    responsavel VARCHAR(100),
    tipo ENUM('Comida', 'Bebida', 'Brincadeira', 'Artesanato') NOT NULL
);

INSERT INTO barracas (nome_barraca, responsavel, tipo) VALUES
('Barraca do Milho Verde', 'Família Souza', 'Comida'),
('Pescaria do Zé', 'Pedro Pescador', 'Brincadeira'),
('Quentão & Vinho Quente', 'Chico Quentão', 'Bebida'),
('Correio Elegante', 'Rosinha Correio', 'Brincadeira'),
('Doces da Maria Pipoca', 'Maria da Silva', 'Comida');

-- Tabela de produtos com preços. Pode parecer um alvo interessante.
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_barraca INT,
    nome_produto VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT,
    FOREIGN KEY (id_barraca) REFERENCES barracas(id)
);

INSERT INTO produtos (id_barraca, nome_produto, preco, estoque) VALUES
(1, 'Pamonha', 8.00, 150),
(1, 'Curau', 7.50, 120),
(3, 'Copo de Quentão', 5.00, 500),
(3, 'Vinho Quente', 6.00, 400),
(5, 'Maçã do Amor', 4.00, 300),
(5, 'Pé de Moleque', 3.50, 450);

-- Tabela para o cronograma de eventos.
CREATE TABLE cronograma_eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    horario TIME NOT NULL,
    evento VARCHAR(255) NOT NULL,
    localizacao VARCHAR(100),
    observacao TEXT
);

INSERT INTO cronograma_eventos (horario, evento, localizacao, observacao) VALUES
('18:00:00', 'Abertura dos portões e das barracas', 'Entrada Principal', 'Cheguem cedo!'),
('19:30:00', 'Quadrilha Infantil "Os Pipoquinhas"', 'Palco Principal', NULL),
('21:00:00', 'Acendimento da Fogueira Principal', 'Pátio Central', 'Segurança reforçada no local. Cuidado com as crianças.'),
('22:00:00', 'Show com a banda "Forró Lascado"', 'Palco Principal', 'Patrocínio: Guaraná Tubaína'),
('23:59:00', 'Sorteio do Bingo Beneficente', 'Barraca do Bingo', 'Prêmio principal: uma TV de 50 polegadas.');

-- Tabela de fornecedores, com contatos que podem parecer úteis.
CREATE TABLE fornecedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_empresa VARCHAR(150) NOT NULL,
    contato_pessoa VARCHAR(100),
    telefone VARCHAR(20),
    produto_fornecido VARCHAR(255)
);

INSERT INTO fornecedores (nome_empresa, contato_pessoa, telefone, produto_fornecido) VALUES
('Fazenda Milho de Ouro', 'Sr. Afonso', '(45) 99988-7766', 'Milho verde, pamonha, curau'),
('Lenhas São João', 'Jonas Madeiro', '(45) 98877-6655', 'Lenha de eucalipto para a fogueira'),
('Distribuidora de Bebidas Fogo na Garganta', 'Ricardo Gole', '(45) 97766-5544', 'Cachaça, vinho, especiarias para quentão'),
('Fábrica de Doces Vó Zefa', 'Dona Zefa', '(45) 96655-4433', 'Amendoim, açúcar, leite condensado');

-- Tabela com notas e senhas falsas. Uma isca perfeita!
CREATE TABLE notas_secretas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    nota TEXT,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO notas_secretas (titulo, nota) VALUES
('Senhas WiFi do Evento', 'WiFi_Visitantes: FestaJunina2025! | WiFi_Staff: AcessoRestritoStaff** | WiFi_Caixa: NaoMexer!!'),
('Combinação do Cadeado do Gerador', 'A senha é o ano do primeiro arraiá: 1998. Mas parece que o Zé perdeu a chave de novo.'),
('Lembrete Urgente', 'Falar com o Coronel sobre a segurança da barraca de prêmios. A senha do cofre dele é muito fraca, algo como o nome do cavalo dele. Seria "Trovão"? Preciso confirmar.');

INSERT INTO notas_secretas (titulo, nota) VALUES
('TODO Urgente - TI', 'O novo gerador de relatórios (baseado em XML) está em teste no endpoint <a href="/gerador_de_relatorio"> /gerador_de_relatorio</a> ');