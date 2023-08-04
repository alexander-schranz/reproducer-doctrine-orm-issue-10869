# Reproducer (not finished yet)

Create test database:

```bash
bin/console doctrine:database:create --env test
bin/console doctrine:schema:update --force --env test
```

Run tests:

```bash
vendor/bin/phpunit
```
