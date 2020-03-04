# Composer e Autoload

Iniciar projeto composer e criar autoload

- Iniciar Projeto Composer

  ```
  composer init
  ```

- Criar Namespace  
  No arquivo `composer.json` adicione o código abaixo entre as chaves `{}` principais

  ```json
  "autoload": {
          "psr-4": {
              "SEU NAMESPACE\\": "DIRETÓRIO DO PROJETO/"
          }
      }
  ```

- Instalando dependencias e gerando arquivo autoload

  ```
  composer install
  ```

- Incluindo `autoload.php` no arquivo **index** do projeto

  ```php
    include __DIR__ . "/../vendor/autoload.php";
  ```
