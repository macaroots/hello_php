# Instalar e configurar o Git
Certifique que o Git está instalado ou siga as instrução de acordo com o seu sistema operacional.

## Conectar Git com SSH
Fonte: https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent

### Gerar a chave SSH localmente
```sh
ssh-keygen -t ed25519 -C "your_email@example.com"
```

### Enviar para o Github
Selecione e copie o conteúdo do arquivo id_ed25519.pub exibido.
```sh
cat ~/.ssh/id_ed25519.pub
```
Acesse Github.com > Settings > SSH and GPG keys > New SSH key.

Dê um nome para sua chave e cole o conteúdo do seu arquivo.

Veja mais: [Adding a new SSH key to your GitHub account.](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account)


## Configurar seu usuário
```sh
git config --global user.name "Fulano de Tal"
git config --global user.email fulanodetal@exemplo.br
```

# Instalar o docker Compose:
```sh
sudo apt update # atualiza a lista de pacotes
sudo apt install docker-compose
```
Veja mais em: https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04.

## Adicionar usuário ao grupo do Docker
```sh
sudo usermod -aG docker $USER
```