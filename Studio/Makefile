separator:
	@echo "\033[01;37m============================="
conf-ok:
	@echo  "\033[01;32mGIT CONFIGURADO COM SUCESSSO!"
	@echo  "\033[01;34mDETALHES DA CONFIGURAÇÃO :\033[06;37m"
	@git config user.name
	@git config user.email

commit-all:
	@git add .
	@read -p "escreva seu commit:" COMMIT
	@git commit -m $COMMIT
	@$(MAKE) separator

git-adriene:
	@git config user.email "adrienebarbosa22@gmail.com"
	@git config user.name "adrienesantana01"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

git-guilherme_gomes:
	@git config user.email "gui.gcs13@gmail.com"
	@git config user.name "guilhermegomes1"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

git-arthur:
	@git config user.email "arthur.alucard41@gmail.com"
	@git config user.name "arthurviniciuse"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

git-luiz:
	@git config user.email "luizcarlosjr1999@gmail.com"
	@git config user.name "luizcsrj"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

git-guilherme_evaristo:
	@git config user.email "guilherme.evaristo.paz@gmail.com"
	@git config user.name "GuilhermeEvaristo"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

conf:
	@composer install
	@cp .env.example .env
	@php artisan key:generate
	@$(MAKE) db
db:	
	@mysql -u root -p --execute="drop database if exists studio; create database studio; drop user if exists master; CREATE USER 'master' IDENTIFIED BY 'origin'; GRANT ALL PRIVILEGES ON studio . * TO master;"
	@sed -i 's/DB_DATABASE=homestead/DB_DATABASE=studio/' .env
	@sed -i 's/DB_USERNAME=homestead/DB_USERNAME=master/' .env
	@sed -i 's/DB_PASSWORD=secret/DB_PASSWORD=origin/' .env
	@php artisan migrate:refresh --seed