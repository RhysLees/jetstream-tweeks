# This is my package jetstream-tweeks

`Note: Currently only supports Livewire stack`

It adds:
1. Password Confirmation to Jetstream Team

## Installation

You can install the package via composer:

```bash
composer require rhyslees/jetstream-tweeks
```

## Usage

Replace in `resouces/views/teams/show.blade.php

```diff
<div class="mt-10 sm:mt-0">
-     @livewire('teams.delete-team-form', ['team' => $team])
+     @livewire('jetstream-tweeks::delete-team-form', ['team' => $team])
</div>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rhys Lees](https://github.com/RhysLees)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
