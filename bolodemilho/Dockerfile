FROM alpine:latest

# Instalar ferramentas básicas + SSH
RUN apk add --no-cache \
    openssh \
    shadow \
    nano \
    tini \
    vim \
    curl \
    wget \
    grep \
    findutils \
    less \
    tree \
    htop \
    net-tools \
    procps-ng 
# Criar usuário
RUN adduser -D organizadores
RUN adduser -D coronel

# Definir senha
RUN echo "organizadores:b0l0d3milh0" | chpasswd
RUN echo "coronel:M4t3D0c3" | chpasswd



# Configurar SSH
RUN echo "PasswordAuthentication yes" >> /etc/ssh/sshd_config
RUN echo "PermitRootLogin no" >> /etc/ssh/sshd_config

# Gerar chaves SSH
RUN ssh-keygen -A

#Criar flags contidas em  Organizadores
RUN mkdir -p /home/organizadores/coronel

RUN mkdir -p /home/organizadores/desafios
RUN echo "Parabéns! Você conseguiu acesso SSH!, mas esse ainda não é o final da nossa quadrilha" > /home/organizadores/.boas_vindas.txt
RUN echo "Agora procure por mais flags, é o processo que te fortalece!" > /home/organizadores/desafios/.proximos_passos.txt

# Criar flags contidas em coronel
RUN echo "Parabéns! Você conseguiu acesso SSH ao usuário coronel!, mas esse ainda não é o final da nossa quadrilha" > /home/coronel/.boas_vindas.txt
RUN mkdir -p /home/coronel/restrito


#script que inicia o container e o mantém ativo, e contém o processo com a senha e usuário do coronel
# Alterado #!/bin/bash para #!/bin/sh
COPY ./flag1.sh /flag1.sh
RUN chmod +x /flag1.sh




# Permissões
RUN chown -R coronel:coronel /home/coronel/
RUN chown -R root:root /home/coronel/restrito
RUN chown -R organizadores:organizadores /home/organizadores/
RUN chmod 750 /home/organizadores/
RUN chmod 750 /home/coronel/
RUN chmod 700 /home/coronel/restrito



ENTRYPOINT ["/sbin/tini", "--"]

EXPOSE 22

CMD ["/flag1.sh"]