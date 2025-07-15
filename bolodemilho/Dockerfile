# Usar a imagem base Alpine Linux, que é leve e segura
FROM alpine:latest

# Define um argumento para a porta, para flexibilidade
ARG SSH_PORT=22

# Instala pacotes essenciais e limpa o cache em um único passo
RUN apk add --no-cache \
    openssh \
    shadow \
    bash \
    sudo

# --- CONFIGURAÇÃO DE USUÁRIOS E SENHAS ---
# Cria usuários, define senhas e adiciona admin ao grupo de sudoers em um único RUN
RUN useradd -m -s /bin/bash caipira && \
    useradd -m -s /bin/bash admin && \
    echo "root:rootpassword123" | chpasswd && \
    echo "caipira:b010d3milh0" | chpasswd && \
    echo "admin:P4c0qu1n74" | chpasswd && \
    adduser admin wheel && \
    # Descomenta a linha no arquivo sudoers para ativar os privilégios do grupo 'wheel'
    sed -i 's/# %wheel ALL=(ALL) ALL/%wheel ALL=(ALL) ALL/' /etc/sudoers

# --- CONFIGURAÇÃO DO SSH ---
# Garante que o login por senha e o login do root estejam habilitados
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config && \
    sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config

# --- DISTRIBUIÇÃO DAS FLAGS E PERMISSÕES ---

# Copia os arquivos de flag para dentro da imagem
COPY ./parabens.txt /home/caipira/.parabens.txt
COPY ./parabensadmin.txt /home/admin/.parabensadmin.txt
COPY ./s3cr3tf1l3.txt /tmp/.s3cr3tf1l3.txt
COPY ./d1c4.txt /tmp/.d1c4.txt


# --- AJUSTE FINO DE PERMISSÕES ---
# Garante que os arquivos pertençam aos seus respectivos donos e ajusta permissões de diretórios
# APENAS COM A CORREÇÃO DA SINTAXE
RUN chown -R caipira:caipira /home/caipira && \
    chown -R admin:admin /home/admin && \
    chmod 750 /home/admin && \
    chmod 750 /root && \ 
    chown admin:admin /tmp/.s3cr3tf1l3.txt && \
    chmod 600 /tmp/.s3cr3tf1l3.txt &&\
    chown caipira:caipira /tmp/.d1c4.txt && \
    chmod 600 /tmp/.d1c4.txt

# Gera as chaves do host para o servidor SSH. É bom deixar por último.
RUN ssh-keygen -A

# Expõe a porta do SSH
EXPOSE 22

# Comando final para iniciar o servidor SSH em primeiro plano
CMD ["/usr/sbin/sshd", "-D"]
