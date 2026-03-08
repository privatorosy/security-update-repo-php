# security-update-repo-php

Repository de test pour `security-update`.

## But

Ce projet PHP est **volontairement vulnérable** (versions figées anciennes) pour générer des alertes Dependabot.

## Détails

- Ecosystem: Composer
- Dépendances volontairement anciennes:
  - `symfony/http-foundation` `2.7.0`
  - `twig/twig` `1.20.0`
  - `guzzlehttp/guzzle` `6.3.0`

## Utilisation locale

```bash
composer install
php -S localhost:8080 -t public
```

## Notes

- Ce repo sert uniquement aux tests d’alertes de sécurité.
- Ne pas utiliser en production.
