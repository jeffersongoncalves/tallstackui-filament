# Password

The Password component provides a specialized input field for entering passwords with features such as revealing/hiding the password and a password generator.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Password;

Password::make('password')
    ->label('Password'),
```

## Password Generator

Enable a password generator to help users create strong passwords:

```php
Password::make('password')
    ->generator(), // Adds a button to generate random passwords
```

You can use a closure to conditionally enable the generator:

```php
Password::make('password')
    ->generator(fn () => auth()->user()->is_admin),
```

## Password Rules

Define password strength rules that will be checked as the user types:

```php
Password::make('password')
    ->passwordRules(['min:8', 'symbols:!@#', 'numbers', 'mixed']),
```

You can use a closure for dynamic rules:

```php
Password::make('password')
    ->passwordRules(fn () => [
        'min:8',
        // ...
    ]),
```

## Placeholder

Add a placeholder to guide users:

```php
Password::make('password')
    ->placeholder('Enter a strong password...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Password;

Password::make('password')
    ->label('New Password')
    ->generator()
    ->passwordRules([
        'min:8',
        'symbols:!@#',
        'numbers',
        'mixed',
    ])
    ->placeholder('Create a strong password')
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Password::make('password')
    ->required()
    ->minLength(8),
    
use Illuminate\Validation\Rules\Password as PasswordRule;

Password::make('password')
    ->required()
    ->rule(PasswordRule::min(8)
        ->letters()
        ->numbers()
        ->symbols()
        ->uncompromised()),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Password::make('password')
    ->extraInputAttributes([
        'autocomplete' => 'new-password',
        'data-analytics-id' => 'password-field',
    ]),
```
