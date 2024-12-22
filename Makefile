export XDEBUG_CONFIG=main
export XDEBUG_VERSION=3.4.0

# Determine if the .env file exists
ifneq ("$(wildcard .env)","")
	include .env
endif

HOST_UID := $(shell id -u)
HOST_GID := $(shell id -g)
PHP_USER := -u www-data
INTERACTIVE := $(shell [ -t 0 ] && echo 1)
ERROR_ONLY_FOR_HOST = @printf "\033[33mThis command is for the host machine\033[39m\n"

ifndef INSIDE_DOCKER_CONTAINER
	INSIDE_DOCKER_CONTAINER = 0
endif

# Docker command with shared options
DOCKER_CMD = HOST_UID=$(HOST_UID) HOST_GID=$(HOST_GID) XDEBUG_CONFIG=$(XDEBUG_CONFIG) XDEBUG_VERSION=$(XDEBUG_VERSION) docker-compose -f docker-compose.yml

# Check if inside docker container
check-docker:
ifeq ($(INSIDE_DOCKER_CONTAINER), 0)
else
	$(ERROR_ONLY_FOR_HOST)
	@exit 1
endif

build: check-docker ## Build dev environment
	@$(DOCKER_CMD) build

start: check-docker ## Start dev environment
	@$(DOCKER_CMD) up -d

stop: check-docker ## Stop dev environment containers
	@$(DOCKER_CMD) stop

down: check-docker ## Stop and remove dev environment containers, networks
	@$(DOCKER_CMD) down

restart: stop start ## Restart dev environment

ssh: check-docker ## Get bash as root user inside Laravel docker container
	@$(DOCKER_CMD) exec $(OPTION_T) $(PHP_USER) app bash

ssh-root: check-docker ## Get bash as root user inside Laravel docker container
	@$(DOCKER_CMD) exec $(OPTION_T) app bash

logs: ## Shows logs from the laravel container. Use ctrl+c in order to exit
ifeq ($(INSIDE_DOCKER_CONTAINER), 0)
	@docker logs -f phptaglib-cli
else
	$(ERROR_ONLY_FOR_HOST)
endif