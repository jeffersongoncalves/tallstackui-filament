# Number

The Number component provides a specialized input field for numeric values with features such as step controls, range limits, and various display options.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Number;

Number::make('quantity')
    ->label('Quantity'),
```

## Min and Max Values

Limit the range of allowed values:

```php
Number::make('age')
    ->minValue(18)
    ->maxValue(100),
    
Number::make('rating')
    ->minValue(1)
    ->maxValue(5),
```

You can use closures for dynamic values:

```php
Number::make('quantity')
    ->minValue(fn () => 1)
    ->maxValue(fn () => $this->record->max_stock ?? 100),
```

## Step Size

Control the increment/decrement step size:

```php
Number::make('temperature')
    ->step(0.5), // Will increment/decrement by 0.5
    
Number::make('quantity')
    ->step(5), // Will increment/decrement by 5
```

## Centralized Display

Center the input value within the field:

```php
Number::make('rating')
    ->centralized(), // Centers the value in the input field
```

## Chevron Controls

Enable chevron (up/down arrow) controls for incrementing/decrementing:

```php
Number::make('quantity')
    ->chevron(), // Shows up/down controls
```

## Selectable

Make the number input selectable:

```php
Number::make('level')
    ->selectable(), // Makes the number input selectable
```

## Placeholder

Add a placeholder to guide users:

```php
Number::make('weight')
    ->placeholder('Enter weight in kg...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Number;

Number::make('quantity')
    ->label('Product Quantity')
    ->minValue(1)
    ->maxValue(100)
    ->step(1)
    ->chevron()
    ->centralized()
    ->placeholder('Qty')
    ->selectable()
    ->required(),
```

## Validation

The `minValue()` and `maxValue()` methods automatically add validation rules. You can add additional validation as needed:

```php
Number::make('even_number')
    ->minValue(2)
    ->maxValue(100)
    ->step(2)
    ->rules(['integer', 'multiple_of:2']),
    
Number::make('price')
    ->minValue(0)
    ->required()
    ->numeric(),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Number::make('quantity')
    ->extraInputAttributes([
        'data-analytics-id' => 'quantity-field',
        'autocomplete' => 'off',
    ]),
```
