<?php

 echo "

 Instação mais recente do PHP no Linux 
 
 1- Fala galera, beleza? Trago para vocês um passo a passo para instalar o PHP e o Apache na última versão no Linux
 
 2- Antes de baixar a nova versão do PHP para o Linux, primeiro precisaremos atualizar os pacotes do sistema operacional.
 
 3- Execute os seguintes comandos:
 
 4- sudo apt update
 
 5- sudo apt upgrade
  
 6- Para fazer o PHP e o Apache funcionarem no Linux, será necessário instalar um repositório PPA.
 
 7- O que é um PPA:
 
 8- Um PPA é um acrônimo para {Personal Package Archive} (Arquivo de Pacotes Pessoal), que é um sistema de gerenciamento de pacotes que facilita a adição e o gerenciamento seguro de repositórios adicionais. Isso inclui autenticação de certificados e gerenciamento de propriedades de software.
 
 9- Execute o seguinte comando no terminal para instalar o PPA em sua máquina:
 
 10- sudo apt install ca-certificates apt-transport-https software-properties-common lsb-release -y
  
 11- Depois de executar o comando, vamos configurar o PPA com o repositório de pacotes de Ondřej Surý, pois tanto o PHP quanto o Apache estarão em suas últimas versões.
  
 12- Execute o seguinte comando:
 
 13- sudo add-apt-repository ppa:ondrej/php -y
 
 14- Logo após configurar o PPA de Ondřej Surý, será necessário atualizar novamente os pacotes do sistema operacional.
 
 15- Execute os seguintes comandos:
 
 16- sudo apt update
 
 17- sudo apt upgrade
 
 18- Agora vamos instalar o PHP e o apache
 
 19- execute o seguinte comando:
 
 20- sudo apt install php8.3 libapache2-mod-php8.3
 
 21- Após a instalação, reinicie o Apache para integrar o novo módulo PHP 8.3:
 
 22- sudo systemctl restart apache2
 
 23- Testando as ferramentas instaladas:
 
 24- Para verificar se está tudo funcionando corretamente, vamos verificar o Apache e o PHP.
 
 25- Execute os seguintes comandos:
 
 26- Apache:
 
 27- sudo systemctl status apache2 
 
 28- Deverá aparecer o status do Apache. Para ele estar funcionando corretamente, deverá estar como 'active (running)'.
 
 29- PHP:
 
 30- php -v 
 
 31- O retorno deverá ser a versão mais recente do PHP.
 
 ";
 ?>