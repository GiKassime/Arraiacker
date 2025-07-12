# PASSO 1: Começar com a imagem base do Alpine Linux
FROM alpine:latest

# PASSO 2: Instalar o servidor OpenSSH e o 'shadow' para gerenciar senhas
RUN apk add --no-cache openssh shadow

# PASSO 3: Criar um usuário para o acesso SSH.
RUN adduser -D caipira

# PASSO 4: Definir a senha para o usuário.
RUN echo "caipira:b0l0d3milh0" | chpasswd

# PASSO 5: Configurar o servidor SSH para permitir login com senha.
RUN echo "PasswordAuthentication yes" >> /etc/ssh/sshd_config

# PASSO 5.5: GERAR AS CHAVES DE HOST DO SSH (ESTA É A CORREÇÃO)
# Sem isso, o servidor SSH não inicia corretamente.
RUN ssh-keygen -A

# PASSO 6: Expor a porta 22 (porta padrão do SSH) para o Docker.
EXPOSE 22

# PASSO 7: Definir o comando para iniciar o servidor SSH quando o contêiner rodar.
CMD ["/usr/sbin/sshd", "-D"]