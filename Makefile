# Constants
EXEC = "docker-compose exec -u$(user) workspace"

# Default variables
user := "user"

# Docker environment
start: up composer-install

stop:
	docker-compose stop

up:
	docker-compose up -d

# Composer
composer-install:
	"$(EXEC)" composer install

# Code quality tools
cs-fix:
	"$(EXEC)" composer php-cs-fixer

phpstan:
	"$(EXEC)" composer phpstan

test:
	"$(EXEC)" composer test

test-coverage:
	"$(EXEC)" composer test

test-all: cs-fix phpstan test

# Workspace
cmd:
	clear && "$(EXEC)" bash || true && clear
