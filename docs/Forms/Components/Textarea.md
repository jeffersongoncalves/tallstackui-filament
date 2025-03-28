# Textarea

The Textarea component provides a multi-line text input field with features such as resizing, character counting, and auto-height adjustment.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Textarea;

Textarea::make('description')
    ->label('Description'),
```

## Resizing

Allow users to manually resize the textarea with the `resize()` method:

```php
Textarea::make('notes')
    ->resize(), // Enables manual resizing
```

You can use a closure for conditional resizing:

```php
Textarea::make('notes')
    ->resize(fn () => auth()->user()->preferences->resizable_textareas),
```

## Auto-Resize

Enable automatic height adjustment based on content with the `resizeAuto()` method:

```php
Textarea::make('content')
    ->resizeAuto(), // Enabled by default
    
Textarea::make('content')
    ->resizeAuto(false), // Disable auto-resize
```

## Maximum Length

Set a maximum character limit with the `maxLength()` method:

```php
Textarea::make('bio')
    ->maxLength(500), // Limits text to 500 characters
```

You can use a closure for dynamic limits:

```php
Textarea::make('summary')
    ->maxLength(fn () => auth()->user()->isPremium() ? 1000 : 500),
```

## Character Count

Display a character counter with the `count()` method:

```php
Textarea::make('message')
    ->count(), // Shows character count
```

This is especially useful when combined with `maxLength()`:

```php
Textarea::make('bio')
    ->maxLength(280)
    ->count(), // Shows "x/280" counter
```

## Placeholder

Add a placeholder to guide users:

```php
Textarea::make('feedback')
    ->placeholder('Share your thoughts...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Textarea;

Textarea::make('content')
    ->label('Article Content')
    ->placeholder('Write your article here...')
    ->resize()
    ->resizeAuto()
    ->maxLength(5000)
    ->count()
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Textarea::make('description')
    ->required(),
    
Textarea::make('security_question')
    ->required()
    ->rules(['regex:/^[A-Za-z0-9 .,?!]+$/']) // Alphanumeric with basic punctuation
    ->maxLength(200),
```

## Additional Input Attributes

Add custom HTML attributes to the textarea element:

```php
Textarea::make('message')
    ->extraInputAttributes([
        'rows' => 8,
        'cols' => 40,
        'data-analytics-id' => 'message-field',
        'spellcheck' => 'true',
    ]),
```
