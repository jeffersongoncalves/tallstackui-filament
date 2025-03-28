# Color

The Color component allows users to select colors using either a color picker or from a predefined set of color options.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Color;

Color::make('background_color')
    ->label('Background Color'),
```

## Color Picker

Enable a color picker interface with the `picker()` method:

```php
Color::make('text_color')
    ->picker(), // Enables the color picker interface
```

## Predefined Colors

Provide a set of predefined color options that users can choose from:

```php
Color::make('status_color')
    ->colors([
        '#FF0000', // Red
        '#00FF00', // Green
        '#0000FF', // Blue
        '#FFFF00', // Yellow
    ]),
```

You can also use a Collection of colors:

```php
use Illuminate\Support\Collection;

Color::make('theme_color')
    ->colors(collect([
        '#1A1A1A', // Dark
        '#FFFFFF', // Light
        '#3B82F6', // Blue
    ])),
```

## Clearable

Allow users to clear the selected color with the `clearable()` method:

```php
Color::make('accent_color')
    ->clearable(), // Allows clearing the selected color
```

## Selectable

Make the color component selectable with the `selectable()` method:

```php
Color::make('brand_color')
    ->selectable(), // Makes the color component selectable
```

## Placeholder

Add a placeholder to guide users:

```php
Color::make('border_color')
    ->placeholder('Select a color...'),
```

## Combining Features

You can combine multiple features to create a highly customized color selector:

```php
use TallStackUIFilament\Forms\Components\Color;

Color::make('theme_color')
    ->label('Theme Color')
    ->colors([
        '#FF0000', // Red
        '#00FF00', // Green
        '#0000FF', // Blue
        '#FFFF00', // Yellow
        '#FF00FF', // Magenta
        '#00FFFF', // Cyan
    ])
    ->picker() // Enable picker for custom colors
    ->clearable()
    ->selectable()
    ->placeholder('Choose a theme color')
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Color::make('brand_color')
    ->required()
    ->rules(['regex:/^#[0-9A-F]{6}$/i']), // Ensures input is a valid hex color
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Color::make('background_color')
    ->extraInputAttributes(['data-theme' => 'dark']),
```
