# ForInterview
### Attention: It's a admin demo for interview ###
use jquery && no css or other ui, just easy php function
### How To Install ###
run server

    php app/console server:run

db migrate

first create database in mysql

	create database symfony;

then use console to migrate

	php app/console doctrine:schema:update --force

then in browser enter to access

	http://localhost:8000/

