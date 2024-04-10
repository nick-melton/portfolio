COMPOSE = docker-compose
PHP = docker-compose exec -it php bash -c

build:
	@$(COMPOSE) build

up:
	@$(COMPOSE) up -d --remove-orphans

up-i:
	@$(COMPOSE) up --remove-orphans

down:
	@$(COMPOSE) down

down-v:
	@$(COMPOSE) down -v

restart:
	$(MAKE) down up

reset:
	$(MAKE) down build up

reset-hard:
	$(MAKE) down-v && docker system prune -f --all && rm -rf package-lock.json node_modules public/hot public/build && $(MAKE) reset

logs:
	@$(COMPOSE) logs -f

ps:
	@$(COMPOSE) ps

dc:
	@$(COMPOSE) ${comand}

exec:
	@$(COMPOSE) exec -it ${comand} bash

install:
	@$(PHP) 'composer install'

migrate:
	@$(PHP) 'php artisan migrate'

generate-key:
	@$(PHP) 'php artisan key:generate'

init-db:
	@$(PHP) 'php artisan db:seed --class=DatabaseSeeder'

refresh-config:
	@$(PHP) 'php artisan optimize:clear && php artisan config:cache'

assets:
	npm run watch

