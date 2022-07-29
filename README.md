### configure

```bash
copy .env.example .env
```

Create a GitHub token with permissions:
- repo
- read:org
- read:user

or just use the link: https://github.com/settings/tokens/new?scopes=repo,read:org,read:user

Create an Open Collective token: https://opencollective.com/applications

### run

```bash
composer install
php bin/release gather-release
```

This will generate a file under `out/` with the new minor version.

// Todo, the code supports setting a next version, but the command does not yet.