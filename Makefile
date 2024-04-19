default:
	cat Makefile


serve:
	php artian serve

post-schema:
	sqlite3 database/database.sqlite "PRAGMA table_info(posts);"

posts-list:
	sqlite3 database/database.sqlite "select * from posts;"

seed:
	php artisan db:seed

fresh-and-seed:
	php artisan migrate:fresh --seed

route-list:
	php artisan route:list

test-get:
	curl http://127.0.0.1:8000/api/post

test-post:
	curl -X POST  http://127.0.0.1:8000/api/post -H "Content-Type: application/json" -d '{ "title": "Neuer Titel", "content": "Neuer Inhalt!" }'

test-delete:
	curl -X DELETE http://127.0.0.1:8000/api/post/6

