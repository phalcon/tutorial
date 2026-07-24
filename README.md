# Phalcon Tutorial

This is a small sample application for the [Phalcon PHP Framework][phalcon]: a
simple registration form built as an MVC app. It is the companion code for the
[Basic Tutorial][tutorial] documentation page and runs on **both Phalcon 5**
(the C extension) and **Phalcon 6** (the `phalcon/phalcon` Composer package).

## Requirements

- PHP >= 8.1
- Phalcon 5 (C extension) **or** Phalcon 6 (Composer package)
- MySQL 8.0
- Docker (recommended for local development)

## Quick start (Docker)

```shell
cp resources/.env.example .env
docker compose up -d --build
```

Then open <http://localhost:8080>. The database schema and a seed user are
loaded automatically on first boot.

To run on Phalcon 6 instead of 5, set `PHALCON_VARIANT=v6` in `.env` (or export
it) and rebuild:

```shell
PHALCON_VARIANT=v6 docker compose up -d --build
```

To open a shell in the app container:

```shell
docker compose exec app bash
```

## Composer scripts

| Script                    | What it does                                  |
|---------------------------|-----------------------------------------------|
| `composer cs`             | Check coding standard (PSR-12) with PHPCS      |
| `composer cs-fix`         | Auto-fix coding standard with PHPCBF           |
| `composer cs-fixer`       | Check style with PHP-CS-Fixer (dry-run)        |
| `composer cs-fixer-fix`   | Apply PHP-CS-Fixer changes                     |
| `composer analyze`        | Static analysis with PHPStan (level 6)         |
| `composer test`           | Run the functional smoke test (Talon)          |

## Project layout

This project follows the [PDS skeleton][pds]:

```
docs/        documentation
public/      web root (index.php, css)
resources/   tooling configs, docker, schema, .env.example
src/         application source (PSR-4 Tutorial\)
tests/       Talon functional test
```

## License

The Phalcon Tutorial is open-sourced software licensed under the [MIT license][mit].
© Phalcon Framework Team and contributors.

[phalcon]: https://phalcon.io
[tutorial]: https://docs.phalcon.io/latest/tutorial-basic
[pds]: https://github.com/php-pds/skeleton
[mit]: https://github.com/phalcon/tutorial/blob/master/LICENSE
