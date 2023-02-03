![](http://brtechsistemas.com.br/storage/imagens/buyacoffe.png)

# Whatsapp Laravel Package

![GitHub Sponsors](https://img.shields.io/github/sponsors/braiani)
![GitHub](https://img.shields.io/github/license/braiani/whatsapp-laravel?color=green)
![GitHub issues](https://img.shields.io/github/issues/braiani/whatsapp-laravel)
![GitHub pull requests](https://img.shields.io/github/issues-pr/braiani/whatsapp-laravel)
![GitHub User's stars](https://img.shields.io/github/stars/braiani?affiliations=OWNER%2CCOLLABORATOR%2CORGANIZATION_MEMBER&style=social)
![](https://img.shields.io/static/v1?logo=instagram&label=Instagram&message=@Brtechsistemas&style=social)

## Requirements

- Laravel 9
- PHP 8.0 and later

## Installing

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Braiani/whatsapp-laravel.git"
    }
  ],
  "require": {
    "brtechsistemas/whatsapp": "*@dev"
  }
}
```

Then run `composer update`

After this, edit the `config/app.php` file and add this:

```php
/*
 * Package Service Providers...
 */

\Brtechsistemas\Whatsapp\Providers\WhatsappProvider::class,
```

## Examples

This repository is under contruction and will be more instructions later.

## Sponsorship

You're welcome to sponsorship this package. I need buy some coffee to improve the development of this package.

What if you help me to [buy some coffee](https://www.buymeacoffee.com/felipebraiani)?

## License

Licensed on MIT terms. For additional info have look at [LICENSE](LICENSE)