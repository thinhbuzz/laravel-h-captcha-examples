# [hCaptcha](https://www.hcaptcha.com) for Laravel 5, Laravel 6 and Laravel 7

## Features

- [x] Multiple captcha on page

- [x] Reset captcha

- [x] Auto discover service provider

- [x] Custom request method

- [x] Using difference key

- [x] Dynamic options on runtime

## Install following [this guide](https://github.com/thinhbuzz/laravel-h-captcha)

## Run example

> Require docker and docker-compose

```shell script
# run composer install
docker run --rm --interactive --tty --volume $PWD:/app composer install
# clone env file
cp .env.example .env
# generate key
docker-compose run --rm --volume $PWD:/app webserver php /app/artisan key:generate
# build and start application
docker-compose up --build
```
