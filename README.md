# Hello, PHP
É um repositório com fins educativos. PHP + Docker-Compose.

# Preparar o ambiente
Certifique-se que o Git e Docker-compose estão instalados e configurados. Veja mais [Instalação do Git e Docker-compose](/docs/INSTALACOES.md).

## Clonar repositório base
Passo 1: Crie um repositório para o seu projeto no Github, Gitlab ou similar.

Passo 2: Em seguida, faça um clone do repositório de exemplo em uma pasta com o nome do seu projeto.
```sh
# usando SSH
git clone git@github.com:macaroots/hello_php.git NOVO_PROJETO

# ou usando HTTPS
git clone https://github.com/macaroots/hello_php.git NOVO_PROJETO
```

Altere a URL do repositório remoto apontando para o seu:
```sh
# listar repositórios remotos
git remote -v

# alterar repositório remoto
# git remote set-url NOME URL
git remote set-url origin git@github.com:<USUARIO>/<NOVO_PROJETO>.git
```

Entrar na pasta e iniciar os serviços:
```sh
cd NOVO_PROJETO
docker-compose up
```
```sh
git clone REPO_BASE NOVO_PROJETO
git remote --set-url origin NOVO_REPO # alterar repositório remoto
```

## Configurar porta
Escolha a porta alterando o arquivo `docker-compose.yml`. Altere o lado da esquerda para a porta desejada.
```sh
        ports:
            - "NOVA_PORTA:80"
```


## Executar
Para ligar o servidor:
```sh
docker-compose up
```
Para desligar, pressione `ctrl+c`.

## Acessar
Acesse pelo navegador http://localhost:81.

# Primeiro Servidor Dinâmico
## Estrutura dos arquivos
<pre>
|-- docker-compose.yml (Descreve os containers)
|-- Dockerfile (Instruções para criação da imagem)
|-- .gitignore (Arquivos ignorados pelo Git)
|-- nginx/ (Configuração do Servidor web)
|   |   |-- default.conf
|-- app/ (Pasta da sua aplicação)
|   |-- public/ (Pasta pública)
|   |   |-- favicon.ico
|   |   |-- index.php

</pre>

Um servidor web é um programa para atender requisições HTTP. Nesse caso, estamos usando o Nginx como servidor web para atender as requisições e servir arquivos estáticos. Além disso, os arquivos com extensão .php são enviados para serem processados pelo serviço do PHP. A saída é empocatada na resposta HTTP pelo Nginx.

Perceba pelos logs no terminal que são criados 2 containers, o servidor web Nginx e o interpretador PHP.