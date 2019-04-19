# Установка

## Linux
Ubuntu: https://docs.docker.com/install/linux/docker-ce/ubuntu/

Debian: https://docs.docker.com/install/linux/docker-ce/debian/



## Mac
https://docs.docker.com/docker-for-mac/

https://docs.docker.com/docker-for-mac/install/


## Windows
https://docs.docker.com/docker-for-windows/

https://docs.docker.com/docker-for-windows/install/

## Проверка что докер установлен
``` bash
docker run hello-world
```


# Подготовка к воркшопу

Скачайте необходимые образы, чтобы не забивать интернет канал во время воркшопа


```bash

docker pull nginx:1.15.11-alpine

docker pull php:7.3.4-fpm-alpine3.9

docker pull redis:5.0.4-alpine3.9

# Собранные имиджы на случай если интернет во время воркшопа будет недоступен или очень медленный:
docker pull windok/php-redis
docker pull rediscommander/redis-commander

```

Анализ имиджей докера

https://github.com/wagoodman/dive

https://microbadger.com/
