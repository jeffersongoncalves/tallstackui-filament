# Pin

The Pin component provides a segmented input field for entering codes such as verification codes, PINs, or other similar numeric or alphanumeric sequences.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Pin;

Pin::make('verification_code')
    ->label('Verification Code'),
```

## Pin Length

Control the number of input segments with the `length()` method:

```php
Pin::make('verification_code')
    ->length(6), // Creates a 6-digit PIN input
    
Pin::make('security_code')
    ->length(4), // Creates a 4-digit PIN input
```

You can use a closure for dynamic length:

```php
Pin::make('verification_code')
    ->length(fn () => config('app.verification_code_length', 6)),
```

## Prefix

Add a text prefix before the PIN input:

```php
Pin::make('order_code')
    ->prefix('G-'),
```

You can use a closure for dynamic prefix:

```php
Pin::make('verification_code')
    ->prefix(fn () => auth()->user()->company->code . '-'),
```

## Input Type Restrictions

Control whether letters and/or numbers are allowed:

```php
Pin::make('numeric_pin')
    ->numbers(), // Only allows numbers
    
Pin::make('letter_code')
    ->letters(), // Only allows letters
```

## Clearable

Allow users to clear the input with a single click:

```php
Pin::make('verification_code')
    ->clearable(),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Pin;

Pin::make('activation_code')
    ->label('Activation Code')
    ->length(8)
    ->prefix('A-')
    ->letters()
    ->clearable()
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Pin::make('verification_code')
    ->length(6)
    ->numbers()
    ->required()    , // Ensures exactly 6 digits
    
Pin::make('referral_code')
    ->length(8)
    ->numbers()
    ->required(),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Pin::make('verification_code')
    ->extraInputAttributes([
        'autocomplete' => 'one-time-code',
        'inputmode' => 'numeric',
    ]),
```
