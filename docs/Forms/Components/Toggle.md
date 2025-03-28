# Toggle

The Toggle component provides a switch-style input for boolean values. It's an intuitive alternative to checkboxes for enabling/disabling options or features.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Toggle;

Toggle::make('is_active')
    ->label('Active Status'),
```

## Size Variations

Control the size of the toggle with the `size()` method:

```php
Toggle::make('notifications')
    ->size('xs'), // Extra small
    
Toggle::make('notifications')
    ->size('sm'), // Small
    
Toggle::make('notifications')
    ->size('md'), // Medium (default)
    
Toggle::make('notifications')
    ->size('lg'), // Large
```

## Color Variations

Customize the toggle's color when enabled using the `color()` method:

```php
Toggle::make('feature_enabled')
    ->color('primary'), // Default
    
Toggle::make('feature_enabled')
    ->color('secondary'),
```

### Available Colors

The Toggle component supports all Tailwind CSS color palettes:

```php
// Base colors
Toggle::make('toggle')->color('primary'),
Toggle::make('toggle')->color('secondary'),

// Gray scales
Toggle::make('toggle')->color('slate'),
Toggle::make('toggle')->color('gray'),
Toggle::make('toggle')->color('zinc'),
Toggle::make('toggle')->color('neutral'),
Toggle::make('toggle')->color('stone'),

// Colors
Toggle::make('toggle')->color('red'),
Toggle::make('toggle')->color('orange'),
Toggle::make('toggle')->color('amber'),
Toggle::make('toggle')->color('yellow'),
Toggle::make('toggle')->color('lime'),
Toggle::make('toggle')->color('green'),
Toggle::make('toggle')->color('emerald'),
Toggle::make('toggle')->color('teal'),
Toggle::make('toggle')->color('cyan'),
Toggle::make('toggle')->color('sky'),
Toggle::make('toggle')->color('blue'),
Toggle::make('toggle')->color('indigo'),
Toggle::make('toggle')->color('violet'),
Toggle::make('toggle')->color('purple'),
Toggle::make('toggle')->color('fuchsia'),
Toggle::make('toggle')->color('pink'),
Toggle::make('toggle')->color('rose'),

// Special
Toggle::make('toggle')->color('black'),
```

## Label Alignment

Align the label relative to the toggle with the `labelAlignment()` method:

```php
Toggle::make('notifications')
    ->labelAlignment('middle'), // Default - centers the label vertically with the toggle
    
Toggle::make('notifications')
    ->labelAlignment('start'), // Aligns the label to the top when displayed next to the toggle
```

You can also use the `LabelAlignments` enum:

```php
use TallStackUIFilament\Enums\LabelAlignments;

Toggle::make('notifications')
    ->labelAlignment(LabelAlignments::Middle),
    
Toggle::make('notifications')
    ->labelAlignment(LabelAlignments::Start),
```

## Label Position

Control where the label appears in relation to the toggle using the `labelPosition()` method:

```php
Toggle::make('notifications')
    ->labelPosition('right'), // Default - places the label after the toggle
    
Toggle::make('notifications')
    ->labelPosition('left'), // Places the label before the toggle
```

You can also use the `LabelPosition` enum:

```php
use TallStackUIFilament\Enums\LabelPosition;

Toggle::make('notifications')
    ->labelPosition(LabelPosition::Right),
    
Toggle::make('notifications')
    ->labelPosition(LabelPosition::Left),
```

## Inline Display

By default, the toggle appears inline with its label. You can change this behavior:

```php
Toggle::make('notifications')
    ->inline(), // Default is false - displays the toggle on a new line
    
Toggle::make('notifications')
    ->inline(false), // Stacks the label above the toggle
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Toggle;
use TallStackUIFilament\Enums\LabelPosition;

Toggle::make('dark_mode')
    ->label('Enable Dark Mode')
    ->color('indigo')
    ->size('md')
    ->labelPosition(LabelPosition::Right)
    ->labelAlignment('middle')
    ->inline()
    ->required(),
```

## Default Value

Set a default value for the toggle:

```php
Toggle::make('receive_newsletter')
    ->default(true), // Toggle is enabled by default
```

## Validation

The Toggle component automatically applies the `boolean` validation rule. You can add additional validation rules as needed:

```php
Toggle::make('terms_accepted')
    ->label('I accept the terms and conditions')
    ->required()
    ->rules(['accepted']), // Must be checked/enabled
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Toggle::make('feature_flag')
    ->extraInputAttributes([
        'data-analytics-id' => 'feature-toggle',
    ]),
```

## Usage Examples

```php
use TallStackUIFilament\Forms\Components\Toggle;

// Simple feature toggle
Toggle::make('dark_mode')
    ->label('Dark Mode')
    ->color('indigo')
    ->inline(),

// Terms acceptance with validation
Toggle::make('terms_accepted')
    ->label('I accept the terms and conditions')
    ->required()
    ->labelPosition('right')
    ->helperText('You must accept the terms to continue'),

// Settings panel toggles
Toggle::make('email_notifications')
    ->label('Email Notifications')
    ->labelPosition('left')
    ->default(true),

Toggle::make('sms_notifications')
    ->label('SMS Notifications')
    ->labelPosition('left')
    ->default(false),
```
