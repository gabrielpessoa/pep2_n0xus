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