# Docker

## Краткая инструкция по тому, как развернуть окружение

# Установка

1. Клонируйте репозиторий:

```bash
   git clone https://github.com/Zavodsk0y/Docker

```

2. Перейдите в директорию проекта:

```bash
    cd .../Docker
```


# Запуск

1. Создайте .env файл на основе приложенного .env.template


2. Для запуска окружения разработки/прода введите в терминал:

```bash
    Для запуска Development-версии:
      cd dev
      Создайте файл .env на основе .env.template
      docker-compose up --build
    Для запуска Production-версии:
      cd prod
      Создайте файл .env на основе .env.template
      docker-compose up --build
```

3. Вы можете работать с запущенным окружением с помощью адреса localhost

```bash
    http://localhost
    Или localhost/ 
    В адресной строке
```

# Environment-переменные

В .env.template описаны следующие переменные окружения:

```bash
    POSTGRES_DB - Наименование базы данных 
    POSTGRES_USER - Имя пользователя БД
    POSTGRES_PASSWORD - Пароль пользователя БД
    WEB_PORT - порт для nginx
    POSTGRES_PORT - порт для БД Postgresql
    ADMINER_PORT - порт ADMINER
```

# Структура 

Существуют следующие директории:

```bash
    dev - папка для подъема development-окружения
    prod - папка для подъема production-окружения
    project - index.php
    source - туда мы можем поместить свои проекты
```

## Автор

- Петренко Константин
- Группа: 421