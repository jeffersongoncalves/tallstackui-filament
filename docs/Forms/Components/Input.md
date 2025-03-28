# Input

The Input component provides a standard text input field with various customization options such as icons, prefixes, and suffixes.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Input;

Input::make('name')
    ->label('Full Name'),
```

## Input Types

Change the input type using the `type()` method:

```php
Input::make('email')
    ->type('email'),
    
Input::make('website')
    ->type('url'),
    
Input::make('age')
    ->type('number'),
    
Input::make('search')
    ->type('search'),
    
Input::make('phone')
    ->type('tel'),
```

## Icons

Add an icon to the input field with the `icon()` method:

```php
Input::make('search')
    ->icon('users'),
```

You can use any icon [configured in tallstackui](https://tallstackui.com/docs/v2/ui/icon)

## Icon Position

Control the position of the icon with the `iconPosition()` method:

```php
Input::make('email')
    ->icon('envelope')
    ->iconPosition('left'), // Default
    
Input::make('search')
    ->icon('magnifying-glass')
    ->iconPosition('right'),
```

You can also use the Filament `IconPosition` enum:

```php
use Filament\Support\Enums\IconPosition;

Input::make('email')
    ->icon('heroicon-o-envelope')
    ->iconPosition(IconPosition::Before), // 'left'
    
Input::make('search')
    ->icon('heroicon-o-magnifying-glass')
    ->iconPosition(IconPosition::After), // 'right'
```

## Prefix and Suffix

Add text before or after the input with prefix and suffix:

```php
Input::make('price')
    ->prefix('$'),
    
Input::make('weight')
    ->suffix('kg'),
    
Input::make('domain')
    ->prefix('https://')
    ->suffix('.com'),
```

You can use closures for dynamic content:

```php
Input::make('price')
    ->prefix(fn () => '$'),
    
Input::make('domain')
    ->suffix(fn () => auth()->user()->default_domain),
```

## Placeholder

Add a placeholder to guide users:

```php
Input::make('name')
    ->placeholder('John Doe'),
```

## Clearable

Allow users to clear the input with a single click:

```php
Input::make('search')
    ->clearable(),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Input;
use Filament\Support\Enums\IconPosition;

Input::make('social_url')
    ->label('Social Media URL')
    ->type('url')
    ->icon('globe-alt')
    ->iconPosition(IconPosition::Before)
    ->prefix('https://')
    ->placeholder('twitter.com/username')
    ->clearable()
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Input::make('email')
    ->type('email')
    ->required()
    ->email()
    ->unique(),
    
Input::make('username')
    ->required()
    ->minLength(3)
    ->maxLength(20)
    ->regex('/^[a-z0-9_-]+$/i'),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Input::make('name')
    ->extraInputAttributes([
        'autocomplete' => 'name',
        'data-analytics-id' => 'name-field',
    ]),
```
