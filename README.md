# TallStackUI Filament

<div class="filament-hidden">

![TallStackUI Filament](https://raw.githubusercontent.com/andrefelipe18/tallstackui-filament/main/art/andrefelipe18-tallstackuifilament.png)

</div>

## Introduction

[TallStackUI](https://tallstackui.com/) is a powerful suite of Blade components for TALL Stack apps. 

This package allows you to use TallStackUI components within Filament forms, bringing together the best of both worlds.

## Installation

1. Install [TallStackUI](https://tallstackui.com/docs/v2/installation)

> Don't worry about the Blade directives for styles and scripts inside the panel; we add them automatically for you.

2. Install this package via Composer:

```bash
composer require andrefelipe18/tallstackuifilament
```

3. Register the plugin for the Filament Panels you want to use:

```php
use TallStackUIFilament\TallStackUIPlugin;
public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            TallStackUIPlugin::make()
        ]);
}
```

4. Run the following command:

```bash
npm run build && php artisan optimize:clear # For NPM users

bun run build && php artisan optimize:clear # For Bun users
```

## Usage

You can now use TallStackUI components in your Filament forms. For example:

```php
use TallStackUIFilament\Forms\Components\Pin;

public function form(Form $form): Form
{
    return $form
        ->schema([
            Pin::make('pin_tallstack')
                ->label('Pin TallStackUI')
                ->helperText('Helper Text')
                ->hint('Hint Text')
                ->length(4)
                ->prefix('PIN')
                ->letters()
                ->required(),
        ]);
}
```

## Documentation

- [Checkbox](./docs/Forms/Components/Checkbox.md)
- [Color](./docs/Forms/Components/Color.md)
- [Date](./docs/Forms/Components/Date.md)
- [Input](./docs/Forms/Components/Input.md)
- [Number](./docs/Forms/Components/Number.md)
- [Password](./docs/Forms/Components/Password.md)
- [Pin](./docs/Forms/Components/Pin.md)
- [Range](./docs/Forms/Components/Range.md)
- [Select](./docs/Forms/Components/Select.md)
- [Tag](./docs/Forms/Components/Tag.md)
- [Textarea](./docs/Forms/Components/Textarea.md)
- [Time](./docs/Forms/Components/Time.md)
- [Toggle](./docs/Forms/Components/Toggle.md)

## TODO:

- [ ] Write tests
- [ ] Add Signature component
- [ ] Add Radio component
- [ ] Add File component
- [ ] Add support a layout components (Step and Tabs)
- [ ] Add rating component
- [ ] Add support for relationship in Select component

## Need Help?

🐞 If you spot a bug, please [submit a detailed issue.](https://github.com/andrefelipe18/tallstackui-filament/issues/new/choose)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

We welcome contributions of all kinds! If you'd like to improve this package, follow these steps:

1. Fork the repository.
2. Make your changes in a new branch.
3. Submit a pull request with a clear description of your changes.

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

Thank you for helping improve TallStackUI Filament! 🚀

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
