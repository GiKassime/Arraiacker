#!/bin/sh

# Iniciar vários processos "isca" simples e idênticos em segundo plano.
# O jogador terá que investigar cada um deles.

(exec -a 'M4t3D0c3' sleep 3600) &


# Inicia o servidor SSH em primeiro plano para manter o contêiner ativo.
exec /usr/sbin/sshd -D