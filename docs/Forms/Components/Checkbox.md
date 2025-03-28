# Checkbox

The checkbox component allows you to interact with a boolean value. It provides various customization options for appearance and layout.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Checkbox;

Checkbox::make('terms_accepted')
    ->label('I accept the terms and conditions'),
```

## Label Alignment

You can align the label relative to the checkbox using the `labelAlignment()` method:

```php
Checkbox::make('remember_me')
    ->labelAlignment('middle'), // Default - centers the label vertically with the checkbox

Checkbox::make('remember_me')
    ->labelAlignment('start'), // Aligns the label to the top when displayed next to the checkbox
```

You can also use the `LabelAlignments` enum:

```php
use TallStackUIFilament\Enums\LabelAlignments;

Checkbox::make('remember_me')
    ->labelAlignment(LabelAlignments::Middle),

Checkbox::make('remember_me')
    ->labelAlignment(LabelAlignments::Start),
```

## Label Position

Control where the label appears in relation to the checkbox using the `labelPosition()` method:

```php
Checkbox::make('remember_me')
    ->labelPosition('right'), // Default - places the label after the checkbox
    
Checkbox::make('remember_me')
    ->labelPosition('left'), // Places the label before the checkbox
```

You can also use the `LabelPosition` enum:

```php
use TallStackUIFilament\Enums\LabelPosition;

Checkbox::make('remember_me')
    ->labelPosition(LabelPosition::Right),

Checkbox::make('remember_me')
    ->labelPosition(LabelPosition::Left),
```

## Inline Display

By default, the checkbox appears inline with its label. You can change this behavior:

```php
Checkbox::make('remember_me')
    ->inline(), // Default is true - displays the checkbox and label side by side

Checkbox::make('remember_me')
    ->inline(false), // Stacks the label above the checkbox
```

## Size Variations

Control the size of the checkbox using the `size()` method:

```php
Checkbox::make('remember_me')
    ->size('xs'), // Extra small
    
Checkbox::make('remember_me')
    ->size('sm'), // Small

Checkbox::make('remember_me')
    ->size('md'), // Medium (default)

Checkbox::make('remember_me')
    ->size('lg'), // Large
```

## Color Variations

Customize the checkbox color when checked using the `color()` method:

```php
Checkbox::make('remember_me')->color('primary'), // Default

Checkbox::make('remember_me')->color('secondary'),
```

### Available Colors

The checkbox component supports all Tailwind CSS color palettes:

```php
// Base colors
Checkbox::make('remember_me')->color('primary'),
Checkbox::make('remember_me')->color('secondary'),

// Gray scales
Checkbox::make('remember_me')->color('slate'),
Checkbox::make('remember_me')->color('gray'),
Checkbox::make('remember_me')->color('zinc'),
Checkbox::make('remember_me')->color('neutral'),
Checkbox::make('remember_me')->color('stone'),

// Colors
Checkbox::make('remember_me')->color('red'),
Checkbox::make('remember_me')->color('orange'),
Checkbox::make('remember_me')->color('amber'),
Checkbox::make('remember_me')->color('yellow'),
Checkbox::make('remember_me')->color('lime'),
Checkbox::make('remember_me')->color('green'),
Checkbox::make('remember_me')->color('emerald'),
Checkbox::make('remember_me')->color('teal'),
Checkbox::make('remember_me')->color('cyan'),
Checkbox::make('remember_me')->color('sky'),
Checkbox::make('remember_me')->color('blue'),
Checkbox::make('remember_me')->color('indigo'),
Checkbox::make('remember_me')->color('violet'),
Checkbox::make('remember_me')->color('purple'),
Checkbox::make('remember_me')->color('fuchsia'),
Checkbox::make('remember_me')->color('pink'),
Checkbox::make('remember_me')->color('rose'),

// Special
Checkbox::make('remember_me')->color('black'),
```

## Validation

The Checkbox component automatically applies the `boolean` validation rule. You can add additional validation rules as needed:

```php
Checkbox::make('terms_accepted')
    ->label('I accept the terms and conditions')
    ->required()
    ->rules(['accepted']),
```

## Full Example

```php
use TallStackUIFilament\Forms\Components\Checkbox;
use TallStackUIFilament\Enums\LabelPosition;

Checkbox::make('terms_accepted')
    ->label('I accept the terms and conditions')
    ->helperText('You must accept the terms to continue')
    ->labelPosition(LabelPosition::Right)
    ->labelAlignment('middle')
    ->color('blue')
    ->size('md')
    ->inline()
    ->required()
```
