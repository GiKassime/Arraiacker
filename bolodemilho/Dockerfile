# PASSO 1: Começar com a imagem base do Alpine Linux
FROM alpine:latest

# PASSO 2: Instalar o servidor OpenSSH e o 'shadow' para gerenciar senhas
RUN apk add --no-cache openssh shadow

# PASSO 3: Criar um usuário para o acesso SSH. Vamos chamá-lo de 'festeiro'
# O -D cria um usuário de sistema sem senha inicial
RUN adduser -D caipira

# PASSO 4: Definir a senha para o usuário 'festeiro'.
# Troque 'senha_do_festeiro' por uma senha de sua escolha!
# AVISO: Colocar senhas em Dockerfiles não é uma prática segura para produção,
# mas é perfeitamente aceitável para um CTF controlado como este.
RUN echo "caipira:b0l0d3milh0" | chpasswd

# PASSO 5: Configurar o servidor SSH para permitir login com senha.
# A linha abaixo adiciona 'PasswordAuthentication yes' ao final do arquivo de configuração.
RUN echo "PasswordAuthentication yes" >> /etc/ssh/sshd_config

# PASSO 6: Expor a porta 22 (porta padrão do SSH) para o Docker.
EXPOSE 22

# PASSO 7: Definir o comando para iniciar o servidor SSH quando o contêiner rodar.
# O '-D' faz com que ele rode em primeiro plano (foreground), mantendo o contêiner ativo.
CMD ["/usr/sbin/sshd", "-D"]