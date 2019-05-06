# Studio de Pilates

Projeto da equipe N0xus, da disciplina de projeto e prática 2 (2019.1), referente a um sistema de controle de estúdio de pilates. Equipe formada por Adriene Barbosa, Arthur Vinicius, Guilherme Evaristo, Guilherme Gomes e Luiz Carlos.

***
> Caso queira selecionar uma sessão.

- [Pré-Requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Ferramentas](#ferramentas)
## Pré-Requisitos
> Modelo de banco utilizado é o relacional, de preferência (Mysql) :)
```
# apt-get install mysql-server
```
Instale o (make) para executar as configurações do nosso projeto.
```
# apt-get install make 
```
Instale por fim instale o gerenciador de pacotes (composer)
```
# apt-get install composer 
```
> Instalação do Laravel obrigatória para a execução do projeto, veja mais em :
* [Laravel-Installation](https://laravel.com/docs/5.8/installation) - Instalação completa na documentação do framework -

## Instalação
### Clone
- Clone o repositório do projeto no seu computador : ```https://github.com/ArthurViniciusE/pep2_n0xus.git ```
### Configuração
> Entre na pasta do projeto e utilize o programa make que você acabou de baixar para atualizar o sistema .
```
$ make conf
```
## Execução
> Após a configuração do make conf, execute na pasta o seguinte comando para iniciar o servidor :
```
$ php artisan serve
```
- Depois de todos os passos feitos, coloque no navegador : ``` localhost:8000 ```, e você terá acesso ao nosso projeto.
## Ferramentas
- [Laravel](https://laravel.com) - PHP Framework
- [Bootstrap](https://getbootstrap.com/) - CSS && HTML Framework
