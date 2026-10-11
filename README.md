# PPKLH — Land Restoration Monitoring (UI Prototype)

A user interface prototype for a land restoration (*pemulihan lahan*) monitoring system, built on Laravel Blade templates.

## Pages

- Landing page and login
- Dashboard with charts
- Land data: list, add, and edit forms
- Location map (Leaflet)
- User management
- User manual

> Status: front-end prototype. Pages are static Blade views and are not yet connected to a database.

## Tech

Laravel 10, Blade, Leaflet, Chart.js.

## Run

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```
