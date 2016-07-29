# pg-web-stats
[![Latest Stable Version](https://poser.pugx.org/halyc0n/pg-web-stats/v/stable)](https://packagist.org/packages/halyc0n/pg-web-stats)
[![Code Climate](https://codeclimate.com/github/halyc0n/pg-web-stats/badges/gpa.svg)](https://codeclimate.com/github/halyc0n/pg-web-stats/badges)
[![Total Downloads](https://poser.pugx.org/halyc0n/pg-web-stats/downloads)](https://packagist.org/packages/halyc0n/pg-web-stats)
[![License](https://poser.pugx.org/halyc0n/pg-web-stats/license)](https://packagist.org/packages/halyc0n/pg-web-stats)

Laravel package which display total_time and average_time for queries in PostgreSQL.

## Installation
1. Prepare your PG setup: enable the `pg_stat_statements` extension and execute `CREATE EXTENSION pg_stat_statements` inside the database you want to inspect.
2. Require package:
    ```
    composer require halyc0n/pg-web-stats
    ```
    Or add it to `composer.json` manually:

    ```json
    {
        "require": {
            "halyc0n/pg-web-stats": "~0.1"
        }
    }
    ```
3. Publish resources if need:
    ```
    php artisan vendor:publish
    ```
4. Default route is /pg_stats