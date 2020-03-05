## Projeto de Escopo Completo

Criando projeto com estrutura completa para desenvolvimento com symfony.

### Iniciar projeto

```
composer create-project symfony/website-skeleton:[VERSÃO_SYMFONY] [NOME_APLICAÇÃO]
```

### Estrutura de pastas

- `/bin`

  Guarda arquivos executaveis, arquivos que são executados via console. Nos ajudam como utilitários de desenvolvimento, comando que nos ajudam na hora de trabalhar com Symfony.

- `/config`

  Contém as configurações de alguns dos componentes que o framework possui. Contém também algumas subpastas como:

  - `/packages`

    Dentro da pasta packages temos três subpastas que são utilizadas na configuração dos ambientes utilizados pelo sistema desenvolvido.

    - `/dev`
    - `/prod`
    - `/test`

  - `/routes`
    Rotas que o sistema utilizará
    Também temos alguns arquivos de configuração dentro do /config:
  - `bootstrap.php` informa como a aplicação irá iniciar;
  - `bundles.php` configura quais componentes e ambientes a serem utilizados;
  - `routes.yaml` configurar as rotas;
  - `services.yaml` informar as configurações do service container e etc ...

- `/public`

  Nesta pasta adicionamos os arquivos que serão públicos em nossa aplicação, como exemplo o `index.php`, a pasta `/asserts` e etc ...

- `/src`

  Uma das pastas mais importantes do projeto, pois contém os arquivos da aplicação como Controllers, Entities, Migrations e Repositories.

  - `/Controller` contém as ações que são realizadas pelo software;
  - `/Entity` mapeam os recursos do banco de dados;
  - `/Migrations` ajudam a criar a estrutura do banco de dados;
  - `/Repository` onde são manipulados os dados do banco de dados;
  - `Kernel.php` define quais os arquivos de configuração que o Symfony deve ler.

- `/templates`

  Onde ficarão os arquivos responsaveis por mostrar o conteudo do sistema (layouts, html e etc ...).

- `/tests`

  Geralmente ficam gravados os testes automatizados.

- `/translations`

  Onde ficam as traduções do sistema.

  - `/var`

  Geralmente onde ficam guardados os arquivos temporários do sistema (cache, logs e etc ...).

- `/vendor`

  Pasta gerenciada pelo composer, onde instala as dependências do projetos, configurações de autoload e do próprio composer.

- `.env`

  Arquivo de configuração do sistema.

- `.gitignore`

  Informa as pastas que serão ignoradas quando o sistema subir para o Git.

- `composer.json`

  Configura as dependências do composer, autoload e etc ...

- `composer.lock`

  Informa as versões dos arquivos ques estão sendo utilizados e etc ...

- `phpunit.xml.dist`

  Configurações do phpUnit utilizado para testes.
