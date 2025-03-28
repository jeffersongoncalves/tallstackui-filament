# Range

The Range component provides a slider input for selecting a numeric value within a specific range. It offers customization options for appearance and behavior.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Range;

Range::make('volume')
    ->label('Volume Level'),
```

## Size Variations

Control the size of the range slider with the `size()` method:

```php
Range::make('opacity')
    ->size('xs'), // Extra small
    
Range::make('opacity')
    ->size('sm'), // Small
    
Range::make('opacity')
    ->size('md'), // Medium (default)
    
Range::make('opacity')
    ->size('lg'), // Large
```

## Color Variations

Customize the range slider's color using the `color()` method:

```php
Range::make('brightness')
    ->color('primary'), // Default
    
Range::make('brightness')
    ->color('secondary'),
```

### Available Colors

The Range component supports all Tailwind CSS color palettes:

```php
// Base colors
Range::make('slider')->color('primary'),
Range::make('slider')->color('secondary'),

// Gray scales
Range::make('slider')->color('slate'),
Range::make('slider')->color('gray'),
Range::make('slider')->color('zinc'),
Range::make('slider')->color('neutral'),
Range::make('slider')->color('stone'),

// Colors
Range::make('slider')->color('red'),
Range::make('slider')->color('orange'),
Range::make('slider')->color('amber'),
Range::make('slider')->color('yellow'),
Range::make('slider')->color('lime'),
Range::make('slider')->color('green'),
Range::make('slider')->color('emerald'),
Range::make('slider')->color('teal'),
Range::make('slider')->color('cyan'),
Range::make('slider')->color('sky'),
Range::make('slider')->color('blue'),
Range::make('slider')->color('indigo'),
Range::make('slider')->color('violet'),
Range::make('slider')->color('purple'),
Range::make('slider')->color('fuchsia'),
Range::make('slider')->color('pink'),
Range::make('slider')->color('rose'),

// Special
Range::make('slider')->color('black'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Range;

Range::make('volume')
    ->label('Volume Level')
    ->color('blue')
    ->size('md')
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Range::make('score')
    ->required()
    ->rules(['integer', 'min:0', 'max:100']),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Range::make('volume')
    ->extraInputAttributes([
        'data-analytics-id' => 'volume-slider',
    ]),
```
