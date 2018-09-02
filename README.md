git pull

yarn install

php bin/console cache:clear --env=prod

cp .env.dist .env

vim .env -> APP_ENV=prod
