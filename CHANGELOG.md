# Changelog

All notable changes are documented here. The format is based on [Keep a Changelog][keep_a_changelog] and this project adheres to [Semantic Versioning][semantic_versioning].

## [5.17.0](https://github.com/phalcon/tutorial/releases/tag/v5.17.0) (2026-07-24)

### Added

- PSR-4 namespaced source under `src/` (`Tutorial\`)
- Composer scripts and tooling: PHPCS + PHP-CS-Fixer (PSR-12), PHPStan (level 6), Talon functional smoke test
- Dual-variant Docker image (Phalcon v5 extension / v6 Composer package) via `PHALCON_VARIANT`
- GitHub Actions CI (quality + test matrix) and Dependabot
- `.editorconfig`, `.gitattributes`, `.dockerignore`

### Changed

- Restructured to the PDS skeleton; tooling config centralized under `resources/`
- Bootstrap uses Composer autoloading and reads the database connection from environment variables
- Docker refreshed to a single `PHP_VERSION`-parameterized image on `mysql:8.0`, served from `/srv`
- Local styling replaces the removed Bootstrap CDN link

### Fixed

- Database name unified to `tutorial` (schema, app, and compose were inconsistent)

### Removed

- Per-version Docker folders (`8.0`–`8.3`), `bin/import_db.sh`, and Vökuró copy-paste leftovers

## [5.6.0](https://github.com/phalcon/tutorial/releases/tag/v5.6.0) (2024-01-14)

### Changed

- Changed license to `MIT`

### Added

- Added `CHANGELOG`, `CONTRIBUTING`, `CODE_OF_CONDUCT` documents
- Added local development support with `docker compose`
- Added `composer.json` with packages

### Fixed

### Removed
