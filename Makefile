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

conf-git-adriene:
	@git config user.email "adrienebarbosa22@gmail.com"
	@git config user.name "adrienesantana01"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

conf-git-guilhermegomes:
	@git config user.email "gui.gcs13@gmail.com"
	@git config user.name "guilhermegomes1"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

conf-git-arthur:
	@git config user.email "arthur.alucard41@gmail.com"
	@git config user.name "arthurviniciuse"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator

conf-git-luiz:
	@git config user.email "luizcarlosjr1999@gmail.com"
	@git config user.name "luizcsrj"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
