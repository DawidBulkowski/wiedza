# Zadanie rekrutacyjne

## Opis zadania
Projekt polega na stworzeniu aplikacji umożliwiającej rejestrowanie różnego rodzaju użytkowników w serwisie oraz ich zarządzanie

## Instalacja aplikacji

### Instalacja bibliotek

$ composer install

### Zmiana danych w pliku konfiguracyjnym

Głównie:

Baza danych:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

Skrzynka pocztowa:
MAIL_DRIVER=smtp
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null
MAIL_FROM_NAME="${APP_NAME}"
MAIL_FROM_ADDRESS=

Adres na który przychodzi email o rejestracji:
REGISTER_EMAIL = 


### Migracja bazy danych

$ php artisan migrate

