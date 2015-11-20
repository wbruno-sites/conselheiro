#Conselheiro App

####Specs
- PHP 5.5.x;
- MySQL 5.x;
- jQuery 1.11 (ajax)

#### Steps
- Executar arquivo dump.sql localizado na pasta scripts;
- Executar arquivo seed.sql localizado na pasta scripts;
- Configurar app[url] em config/config.ini com a URL da aplicação.

## Resetando a aplicação
- Faça truncate na tabela votes;
```
> TRUNCATE TABLE votes;
```
