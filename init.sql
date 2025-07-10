-- Usa o banco de dados 'barraquinha' que já foi criado.
CREATE DATABASE IF NOT EXISTS barraquinha;
USE barraquinha;

-- Cria a tabela para os usuários (agora chamada 'caipira').
CREATE TABLE caipira (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'user' -- Aumentei o tamanho do VARCHAR para caber 'amaiscaipiradetodas'
);

-- Insere os usuários na tabela correta ('caipira').
INSERT INTO caipira (username, password, role) VALUES ('maria.pipoca@arraiacker.com', 'pipoquinha123', 'user');
INSERT INTO caipira (username, password, role) VALUES ('chico.quentao@arraiacker.com', 'adorofesta', 'admin');
INSERT INTO caipira (username, password, role) VALUES ('ana.canjica@arraiacker.com', 'milhoverde', 'guest');
INSERT INTO caipira (username, password, role) VALUES ('pedro.pescador@arraiacker.com', 'ganheiapeixaria', 'user');
INSERT INTO caipira (username, password, role) VALUES ('rosinha.correio@arraiacker.com', 'elegante2024', 'guest');
INSERT INTO caipira (username, password, role) VALUES ('gerente.barraca@arraiacker.com', 'faturamentoalto', 'admin');
INSERT INTO caipira (username, password, role) VALUES ('suporte.ti@arraiacker.com', 'resetar@123', 'support');

-- Insere o usuário alvo do desafio, o "Coronel".
INSERT INTO caipira (id, username, password, role) VALUES ('coronel.cascavel@arraiacker.com', 'pinhão', 'amaiscaipiradetodas');