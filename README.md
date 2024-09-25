<p align="center"><a href="https://sobraldev.com.br/" target="_blank"><img src="https://sobraldev.com.br/assets/img/logo/2.png" width="400" alt="imagem da logo do sistema sobraldev"></a></p>

# Sobraldev-sys

O sobraldev é um portifólio de projetos automatizado, assim é possível gerenciar e deixar sempre atualizado a página sem ter a preocupação de alteração no código. 

## Especificações utilizada no projeto

<ul>
  <li>Laravel: 10.10</li>
  <li>Composer: 2.5.8</li>
  <li>PHP: 8.1</li>
  <li>Livewire: 3.4</li>
  <li>Tinker: 2.8</li>
  <li>Bibliotecas: Bootstrap e Tailwind</li>
  <li>Windows: 11</li>
</ul>

## Imagens do sistemas disponível apenas para os visitantes da página:

- Tela principal, onde o usuário possuir informações da barra de navegação e as novidades que são anunciadas no carrossel de imagens
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288480117085048864/image.png?ex=66f5561e&is=66f4049e&hm=f896e0bb3b5c249f5ad19ec6812843b70f39e0c5c7c17c1f4b0790eb1a84c15a&" width="400" alt="imagem da Tela principal, onde o usuário possuir informações da barra de navegação e as novidades que são anunciadas no carrossel de imagen"></p>

- Visão geral de projetos e tecnologias, onde o usuário pode conferrir as tecnologias que são geralmente utilizadas nos projetos, além da seção projetos que ao abrir um deles contém mais detalhes sobre atráves de uma modal:
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288482042375311411/image.png?ex=66f557e9&is=66f40669&hm=ad43e36a90c8707aa88c02cfc9682981c49a4255edee7e7abb721aa1ac63ef11&" width="400" alt="Imagem da visão geral de projetos e tecnologias"></p>

- Detalhes do projeto, o usuário pode conhecer mais projeto selecionado por meio do acompanhamento de cada processo, asssim ele pode ver as tecnologias utilizada em cada etapa, como também ver ele em execução, abrir o seu repositório entre outras opções:
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288482371783491604/image.png?ex=66f55838&is=66f406b8&hm=3edfda1e8f86ffb39c9d3ff35d479f5cf2de7b335b488ffbc11ec6dd98869b13&" width="400" alt=""></p>
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288482571285696584/image.png?ex=66f55867&is=66f406e7&hm=dbff0a9e8d5110f36e34daf73c32efaaeddfabdff11425a7ddf4df6445c309e0&" width="400" alt=""></p>

- Projetos cientificos, caso o usuário tenha interresse em conhecer mais sobre os projetos cientificos desenvolvidos por Marcos Sobral, temos está seção, onde contém os principais artigos e projetos desenvolvidos no momentos:
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288484252467593320/image.png?ex=66f559f8&is=66f40878&hm=90e9dfa869bca27e8633cbba0ff9e9acdc15d883ceb65936e41754997a84acca&" width="400" alt=""></p>

## Imagens das páginas do sistema disponível apenas para o administrador do portifólio:

- Tela de login
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288484993383006321/image.png?ex=66f55aa9&is=66f40929&hm=3ae9b554271d030b53c5dbffb962512b1726377a0c529310ba2d00ce430825a8&"></p>

- Tela de gerenciamento de Carrossel
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288485303857713173/image.png?ex=66f55af3&is=66f40973&hm=fda0ba46f41897fc5cf3e848c5e548f6f9f6c8ca15b7be4d5fadc1ca8a4c1922&"></p>

- Tela de gerenciamento das Tecnologias
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288485552731197461/image.png?ex=66f55b2e&is=66f409ae&hm=90c301b6606b13c5426774f89d582e06199339fee0acbf2a03264ef90c0e420d&"></p>

- Tela de gerenciamento de Projetos Cientificos
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288485863352700928/image.png?ex=66f55b78&is=66f409f8&hm=e5679928f7293bad4de7d90ceb68a0ff35497ca56dcc501090496b60054bf515&"></p>

- Tela de gerenciamento de Projetos
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288486192589049930/image.png?ex=66f55bc7&is=66f40a47&hm=bf8ee6bf08470eb08930941be7bad4260e9f8f02decfa5e8c054117c019450f2&"></p>

- Tela de gerenciamento dos Processos do projeto
<p align="center"><img src="https://cdn.discordapp.com/attachments/760519228011970600/1288486615227830302/image.png?ex=66f55c2b&is=66f40aab&hm=049e0cff25c48260fbbbdd033f7aac04efa13adccb0f9b4b2523645b4c1590e4&"></p>

# Caso tenha interesse em como realizar a criação de um projeto Laravel utilizando Docker:

As instruções de instalação estão disponíveis para ambos sistemas: [Windows](#instalação-em-windows) e [Linux](#instalação-em-linux)

# Instalação em Windows
<details>
  <summary>Clique para expandir!</summary>
  
  ## Pré-requisitos
  Para a implantação e correto funcionamento do sistema, é necessário a instalação e configuração de alguns pré-requisitos, junto a esse processo serão adicionados passos marcados com "**opcional**", estes são voltados para serem seguidos pelo pessoal de desenvolvimento do sistema.

  ## W-Passos:
  - [Passos](#w-passos)
    - [Instalação e configuração do PHP](#w-instalação-e-configuração-do-php)
    - [Configurar hosts no Windows](#w-configurar-hosts-no-windows)
    - [Instalação do Composer](#w-instalação-do-composer)
    - [Instalação do VSCode (opcional)](#w-instalação-do-vscode-opcional)
    - [Instalação do git para Windows (opcional)](#w-instalação-do-git-para-windows)
    - [Instalação do WSL2 no Windows 10](#w-instalação-do-wsl2-no-windows-10)
    - [Instalação do Docker Desktop](#w-instalação-do-docker-desktop)
  - [Implantação do sistema](#w-implantação-do-sistema)
    - [Configuração do laradock](#w-configuração-do-Laradock)
    - [Configuração inicial do sistema](#w-configuração-inicial-do-sistema)
    - [Configuração inicial do banco de dados](#w-configuração-inicial-do-banco-de-dados)

  ### W-Instalação e configuração do PHP

  É **necessário** instalar o PHP 8 ou superior. A instalação do PHP se baseia nos seguintes passos, que também podem ser vistos nessa [página externa](https://blog.schoolofnet.com/como-instalar-o-php-no-windows-do-jeito-certo-e-usar-o-servidor-embutido/).

  - Acessar o [site de download do PHP](https://php.net/downloads.php "Site de download do PHP") e baixar o arquivo compactado do PHP
  - Descompactar o arquivo em qualquer lugar no armazenamento do computador como por exemplo: *`C:\php\`*
  - Renomear arquivo *`php.ini-development`* para *`php.ini`*
  - Dentro do arquivo *`php.ini`*, descomentar as seguintes linhas, ou seja, remover o ";" do início de cada linha: 

  ```
  ;extension=fileinfo
  ;extension=pdo_mysql
  ```

  - Configurar a variável de ambiente para adicionar o caminho para PHP [Link](https://medium.com/@marcos.paegle/php-moderno-como-utilizar-o-php-7-1-de-maneira-f%C3%A1cil-e-r%C3%A1pida-windows-286ff668cce8#:~:text=Aperte%20a%20tecla%20Windows%20+%20Pause,o%20%E2%80%9CC:%5Cphp%E2%80%9D.)
  - Testar versão do PHP no terminal com o comando:

  ```
  php -v
  ```

  ### W-Configurar hosts no Windows

  Passo recomendado para poder digitar *`localhost`* na URL do navegador e acessar o servidor local.

  - Abrir o bloco de notas como administrador
  - Abrir o arquivo *`C:\Windows\System32\drivers\etc\hosts`*
  - Adicionar/Descomentar a seguinte linha

  ```
  127.0.0.1 localhost
  ```
  - Salvar o arquivo

  ### W-Instalação do Composer
  https://getcomposer.org/download/

  ### W-Instalação do VSCode (Opcional)
  https://code.visualstudio.com

  A instalação do VSCode é um passo recomendado para que toda a equipe de desenvolvimento utilize o mesmo editor de código-fonte

  ### W-Instalação do git para Windows
  https://git-scm.com/download/win

  Passo recomendado para desenvolvimento, pois possibilita a execução do comando *`git clone`*, *`git push`*, entre outros. Caso esse passo não seja executado, quando o documento executar um comando *`"git clone"`*, se fara necessário manualmente baixar do github a versão compactada dos arquivos. Além disso, será necessário descompactar no local correto assim como informado nos passos seguintes.

  ### W-Instalação do WSL2 no Windows 10
  https://docs.microsoft.com/en-us/windows/wsl/install

  ### W-Instalação do Docker Desktop
  https://www.docker.com/get-started/

  ## W-Implantação do ambiente de desenvolvimento

  ### W-Configuração do Laradock
  - Criar pasta para o projeto. Neste documento, será referenciado como *`[projeto]`*
  - Executar o seguinte comando dentro da pasta *`[projeto]\`*:

  ```
  git clone https://github.com/Laradock/laradock.git
  ```

  - Dentro de *`[projeto]\laradock\`*, criar uma cópia de *`.env.example`* nomeada *`.env`*
  - Configurar o arquivo *`[projeto]\laradock\.env`* para ter a seguinte linha

  ```
  PHP_VERSION=8.1
  ```

  ### W-Configuração inicial do sistema
  - Clonar o repositório do sistema, executando dentro de *`[projeto]\`* o seguinte comando:

  ```
  git clone https://github.com/RsiIFTO/SantaMalas
  ```

  - Dentro de *`[projeto]\SantaMalas\`*, criar uma cópia de *`.env.example`* nomeada *`.env`* 
  - Abrir a pasta do *`[projeto]\SantaMalas\`*, usando o terminal e executar os seguintes comandos: 

  ```
  composer install
  php artisan key:generate
  ```

  > **Nota** : Se o docker tiver containers do laradock de uma instalação anterior, é necessário executar os seguintes comandos na pasta *`[projeto]\laradock\`*, antes do passo seguinte:

  > ```
  > docker-compose build php-fpm
  > docker-compose build workspace
  > docker-compose down"
  > ```

  - Abrir a pasta do *`[projeto]\laradock\`* usando o terminal e executar o seguinte comando:

  ```
  docker-compose up -d nginx mysql phpmyadmin redis workspace
  ```

  ### W-Configuração inicial do banco de dados
  - Dentro do arquivo *`[projeto]\SantaMalas\.env`*, altere as seguintes linhas para os dados valores se estiverem diferentes, salve e mantenha o arquivo aberto:

  ```
  DB_HOST=127.0.0.1
  DB_PASSWORD=root
  ```

  - Com o terminal na pasta *`[projeto]\SantaMalas\`*, execute o seguinte comando:

  ```
  php artisan migrate:fresh --seed
  ```

  - Altere o arquivo *`.env`* novamente, altere a linha e salve:

  ```
  DB_HOST=mysql
  ```
</details>

# Instalação em Linux
<details>
  <summary>Clique para expandir!</summary>
    
  ## Pré-requisitos
  Para a implantação e correto funcionamento do sistema, é necessário a instalação e configuração de alguns pré-requisitos, junto a esse processo serão adicionados passos marcados com "**opcional**", estes são voltados para serem seguidos pelo pessoal de desenvolvimento do sistema.

  ## L-Passos:
  - [Passos](#l-passos)
    - [Instalação do git](#l-instalação-git)
    - [Instalação e configuração do PHP](#l-instalação-e-configuração-do-php)
    - [Instalação do Composer](#l-instalação-do-composer)
    - [Instalação do VSCode (opcional)](#l-instalação-do-vscode-opcional)
    - [Instalação do git](#l-instalação-git)
    - [Instalação do Docker](#l-instalação-do-docker)
  - [Implantação do sistema](#l-implantação-do-sistema)
    - [Configuração do laradock](#l-configuração-do-Laradock)
    - [Configuração inicial do sistema](#l-configuração-inicial-do-sistema)
    - [Configuração inicial do banco de dados](#l-configuração-inicial-do-banco-de-dados)
  
  ### L-Instalação git:
Abra um terminal e utilize o seguinte comando:
```
sudo apt install git -y
```
e insira a senha do usuário.

### L-Instalação do PHP junto de extensões:
Dependente da versão a ser instalada e dos pacotes disponíveis para instalação, pose ser necessário alterar a versão inserida pelo comando, o comando a seguir é para a instalação do PHP 8.1 junto de algumas extensões necessárias:
```
sudo apt install php8.1 php8.1-common php8.1-curl php8.1-xml php8.1-mbstring php8.1-mysql php8.1-cli php8.1-opcache -y
```
  - Testar versão do PHP no terminal com o comando:

  ```
  php -v
  ```

  ### L-Instalação do Composer
  AVISO: **Não** se pode utilizar comando `sudo apt install composer`, já que este instala uma **versão desatualizada** do mesmo e causará erros.

  https://getcomposer.org/download/

    ```
    sudo mv ./composer.phar /usr/local/bin composer
    ```

  ### L-Instalação do VSCode (Opcional)
  https://code.visualstudio.com

  A instalação do VSCode é um passo recomendado para que toda a equipe de desenvolvimento utilize o mesmo editor de código-fonte

  ### L-Instalação do Docker
  A instalação do Docker no Linux se divide em partes, sendo elas:
  - [Instalação do Docker Engine](https://docs.docker.com/engine/install/)
  - [Pós-instalação do Docker Engine](https://docs.docker.com/engine/install/linux-postinstall/)
  - [Instalação do Docker Compose](https://docs.docker.com/compose/install/)
  

  ## L-Implantação do ambiente de desenvolvimento

  ### L-Configuração do Laradock
  - Executar os seguintes comandos, substituindo "*`[projeto]`*" pelo nome da pasta que será criada.
  ```
  mkdir [projeto] && cd "$_"
  git clone https://github.com/Laradock/laradock.git
  cd laradock && cp .env.example .env
  sed -i s/PHP_VERSION=7.4/PHP_VERSION=8.1/ .env
  ```

  Esses comandos fazem o seguinte:
  - cria uma pasta
  - clonar Laradock
  - configurar versão do php do laradock

  ### L-Configuração inicial do sistema
  Executar os seguintes comandos dentro de *`[projeto]`*:
  ```
  sudo apt install php8.1-curl php8.1-dom php8.1-pdo-mysql unzip
  git clone https://github.com/RsiIFTO/SantaMalas
  cd SantaMalas && cp .env.example .env
  composer install
  php artisan key:generate
  ```
  > **Nota** : Se o docker tiver containers do laradock de uma instalação anterior, é necessário executar os seguintes comandos na pasta *`[projeto]\laradock\`*, antes do passo seguinte:
  > ```
  > docker-compose build php-fpm
  > docker-compose build workspace
  > docker-compose down"
  > ```
  - Abrir a pasta do *`[projeto]\laradock\`* usando o terminal e executar o seguinte comando:
  ```
  docker-compose up -d nginx mysql phpmyadmin redis workspace
  ```

  ```
  DB_HOST=mysql
  ```
</details>

# Comandos Úteis

## Iniciar sistema

Com o docker funcionando, pode-se executar dentro de *`[projeto]\laradock\`*:
```
docker-compose up -d nginx mysql phpmyadmin redis workspace
```

## Reiniciar sistema
dentro de *`[projeto]\laradock\`*:
```
docker-compose restart
```

## Parar sistema
dentro de *`[projeto]\laradock\`*:
```
docker-compose stop
```

***

# Instalação e Configuração do projeto
Inicia-se a instalação do projeto por meio da clonagem do projeto existente com o uso de **git**:
```
git clone <repositorio>
```
e mudando o diretório de trabalho para a pasta do projeto baixado com:
```
cd <nome-do-projeto>
```

## Configuração inicial do sistema
Executar os seguintes comandos dentro de [projeto] caso estiver no Linux, se tiver no windows bastar apenas fazer uma cópia do arquivo [env.example] e renomear para [env]:
```
cd projeto && cp .env.example .env
```
## Adicionando pastas faltantes
Em seguinte é criada a pasta vendor dentro do projeto utilizado o comando:
```
composer install
```

### L - Possível falha 
Podem ocorrer um tipo de erro nessa parte que é a falta de algum módilo de PHP no sistema. esse tipo de erro irá mostrar diversas linhas de erro porém no início irá também falar qual(ais) extensão(ões) falta(m) com algo como *"ext-< extensao >"* e para resolver o erro, é utilizado o seguinte comando:
```
sudo apt install php8.1-<extensao>
```
Por exemplo, se no erro estiver "ext-curl", comando de instalar será "sudo apt install php8.1-curl"

[ERRO DE CREDENCIAL]()

```
php artisan key:generate
```

## Configuração inicial do banco de dados
<details>
  <summary>Clique para expandir!</summary>

  - Dentro do arquivo *`[projeto]\malas\.env`*, altere as seguintes linhas para os dados valores:

  ```
  DB_HOST=127.0.0.1
  DB_PASSWORD=root
  ```

  - Com o terminal na pasta *`[projeto]\malas\`*, execute o seguinte comando:

  ```
  php artisan migrate
  ```

  - Altere o arquivo *`.env`* novamente, altere a linha e salve:

  ```
  DB_HOST=mysql
  ```
</details>

***

## Utilizando mais de um projeto simultaneamente no laradock
<details>
  <summary>Clique para expandir!</summary>

* Primeiro passo é está Dentro do arquivo *`[projeto]\malas\.env`*, altere as seguintes os dados valores:

```
APP_URL=http://localhost.<nomedoprojeto>
```

* Segundo passo é abrir a pasta `[projeto]\laradock\ngnix\sites\defaut.conf` e altere a linha que contém :
`root /var/www/public;`, assim informe o diretório do seu projeto1 e a pasta public :
```
server_name localhost;
root /var/www/public/malas/desenvolvimento/public;
```

* Terceiro passo ainda dentro da pasta  `[projeto]\laradock\ngnix\sites\app.conf.example` fazer uma cópia do arquivo e altere o nome do arquivo para `<nome do segundo projeto>.conf`, dentro desse arquivo altere a linha que contém :
`root /var/www/public;`, assim informe o diretório do seu projeto1 e a pasta public:
```
server_name localhost;
root /var/www/public/malas/teste/public;
```

* ultimo passo, abra o seguinte arquivo `C:\Windows\System32\drivers\etc\hosts.` adicione abaixo da linha descomentada `127.0.0.1       localhost`:
```
	127.0.0.1     localhost.<nomedoprojeto>
```
</details>

***

## Lidando com possíveis erros
<details>
  <summary>Clique para expandir!</summary>

### Erro na porta 80:

Cheque se o serviço do apache2 está rodando no computador e se positivo, utilize os seguintes comandos para parar e desabilitar o apache2 de iniciar no sistema:
```
sudo systemctl stop apache2
sudo systemctl disable apache2
```
Teste novamente a inicialização do laravel.

### Erro com o sail

Caso apareça um erro relacionado ao sail, será necessário executar o comando:
```
php artisan sail:install
```
e inserir os numeros separados por vírgula dos servições que vai querer instalar, a instalação padrão é *1,3,5,7,8*

Após instalação, volte ao teste de inicialização do laravel.

### Erro de permissão " There is no existing directory at "/storage/logs" and it could not be created: Permission denied "

Caso apareça esse erro, basta executar os seguintes comandos:
```
php artisan route:clear

php artisan config:clear

php artisan cache:clear
```

ou

dentro da pasta do projeto utilizando o gerenciador de arquivos do linux, selecionar a pasta `storage` e aperte o botão direito do mouse e clique em propriedades, após clique em permissões e vá na ultima opção que é ` Alterar permissões dos arquivos contidos na pasta`. Dessa forma altere as opções `apenas leitura` e `acessar arquivo` para `leitura e escrita` e `criar e excluir arquivo`, por fim clique em mudar.

### Erro Acess denied

Caso apareça este seguinte erro:
```
git pull --tags origin main
remote: HTTP Basic: Access denied. The provided password or token is incorrect or your account has 2FA enabled and you must use a personal access token instead of a password. See https://gitlab.com/help/topics/git/troubleshooting_git#error-on-git-fetch-http-basic-access-denied
fatal: Authentication failed for 'https://gitlab.com/George-Trindade/desenvolvimento.git/' 
```
esse erro é comum de acontecer quando estiver fazendo git push ou git pull pela primeira vez no projeto, para sua resolução é necessário que o usuário faça uma autenticação global onde é utilizada esses comandos: 
```
git config --global user.name <seu nome de usuário no gitlab ou hub>
git config --global user.email <informa seu email do gitlab/hub>
```
ou exemplo mais real

```
git config --global user.name joao-lima
git config --global user.email joaolima@gmail.com
```

## Erro require(vendor/autoload.php): failed to open stream
```
PHP Warning:  require(C:\src\laravel\public\desenvolvimento/vendor/autoload.php): Failed to open stream: No such file or directory in C:\src\laravel\public\desenvolvimento\artisan on line 18
```
Resolução:
```
composer update --no-scripts
```

## Erro SQLSTATE[HY000] [2002] Connection refused

Resolução: Alterar DB_HOST=127.0.0.1 para DB_HOST=mysql


  ```
  DB_HOST=mysql
  ```
</details>

## Contato
E-mail: marcossobraldev@gmail.com

***

