FROM alpine:latest

# Instala pacotes essenciais
RUN apk add --no-cache \
    openssh \
    shadow \
    tini \
    bash

# Gera as chaves do servidor SSH
RUN ssh-keygen -A

# Define a senha de root
RUN echo "root:rootpassword123" | chpasswd

# Corrige a configuração do SSH para permitir login de root com senha
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config && \
    sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config && \
    sed -i 's/#PermitEmptyPasswords no/PermitEmptyPasswords no/' /etc/ssh/sshd_config && \
    echo "PermitRootLogin yes" >> /etc/ssh/sshd_config && \
    echo "PasswordAuthentication yes" >> /etc/ssh/sshd_config



EXPOSE 22

ENTRYPOINT ["/sbin/tini", "--"]
CMD ["/flag1.sh"]
