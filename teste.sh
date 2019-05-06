#!/bin/bash

git filter-branch -f --commit-filter 'if [ "$GIT_AUTHOR_NAME" = "joselimabar" ];
then export GIT_AUTHOR_NAME="GuilhermeEvaristo"; export GIT_AUTHOR_EMAIL=guilherme.evaristo.paz@gmail.com;
fi; git commit-tree "$@"';

git filter-branch -f --commit-filter 'if [ "$GIT_COMMITTER_NAME" = "joselimabar" ];
then export GIT_COMMITTER_NAME="GuilhermeEvaristo"; export GIT_COMMITTER_EMAIL=guilherme.evaristo.paz@gmail.com;
fi; git commit-tree "$@"';
