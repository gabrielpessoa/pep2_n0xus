# STUDIO - Gerenciamento para estúdios de pilates
O projeto Studio tem como objetivo facilitar o gerenciamento de clinicas de pilates, cadastrando exercícios, grupos musculares e equipamentos de forma fácil e ágil.

## Iniciando
Siga as instruções abaixo para realizar a instalação e execução do projeto STUDIO.
> Caso queira selecionar uma sessão.

- [Pré-Requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Ferramentas](#ferramentas)
- [Equipe](#equipe)
- [Licença](#licença)
## Pré-Requisitos

> Vamos instalar o modelo de banco utilizado, que é o relacional, de preferência (Mysql)
```
# apt-get install mysql-server
```
Instale o (make) para executar as configurações do nosso projeto.
```
# apt-get install make 
```
Instale por fim o gerenciador de pacotes (composer). Você pode dar uma olhada na documentação oficial caso haja alguma duvida https://getcomposer.org/
```
# apt-get install composer 
```
> A instalação do (Laravel) é obrigatória para a execução do projeto, veja mais em :
* [Laravel-Installation](https://laravel.com/docs/5.8/installation) - Instalação completa na documentação do framework -

## Instalação
### Clone
- Clone o repositório do projeto no seu computador : ```https://github.com/ArthurViniciusE/pep2_n0xus.git ```

### Configuração
> Entre na pasta do projeto e utilize o programa make que você acabou de baixar para atualizar o sistema, ele irá pedir a senha do seu banco de dados para realizar as migrations.
```
$ cd pep2_n0xus
$ make conf
```
## Execução
> Após a configuração do make conf, execute na pasta o seguinte comando para iniciar o servidor :
```
$ php artisan serve
```
- Depois de todos os passos feitos, acesse seu navegador de preferência, e na barra de endereço digite: ``` localhost:8000 ```, e você terá acesso ao nosso projeto.
## Ferramentas
- [Laravel](https://laravel.com) - PHP Framework
- [Bootstrap](https://getbootstrap.com/) - CSS && HTML Framework
- [AdminLTE](https://adminlte.io/) - Bootstrap Admin Dashboard

## Equipe
- [Arthur Vinicius] (https://github.com/arthurviniciuse)
- [Adriene Barbosa] (https://github.com/adrienesantana01)
- [Luiz Carlos] (https://github.com/luizcsrj)
- [Guilherme Gomes] (https://github.com/guilhermegomes1)
- [Guilherme Evaristo] (https://github.com/GuilhermeEvaristo)

## Licença

- Copyright 2019© <a href="https://github.com/ArthurViniciusE/pep2_n0xus" target="_blank">STUDIO</a>.
