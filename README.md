# PIBG Unity: Unified Platform for PIBG Management

## Getting Started

Note for local development using sqlite: We have modified the laravel's default `config/database.php` configuration for sqlite to seek for `database/unity.sqlite` as the default database. The `unity.sqlite` database file is not included in this repository but the default `database.sqlite` from the fresh laravel's project is. So, you need to create it from the default `database.sqlite` file after cloning this repository.

```bash
cp database/database.sqlite database/unity.sqlite
```

### Setup Development Environment Using docker

1. Fire up development containers:

```bash
docker compose -f compose.dev.yaml up --build -d
```
