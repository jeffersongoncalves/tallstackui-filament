# Tag

The Tag component allows users to input multiple tags (or labels), creating a list of values. It's ideal for categorization, keywords, or any scenario where multiple string values need to be entered.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Tag;

Tag::make('keywords')
    ->label('Keywords'),
```

## Prefix

Add a prefix to all tags with the `prefix()` method:

```php
Tag::make('hashtags')
    ->prefix('#'), // Adds # before each tag
    
Tag::make('mentions')
    ->prefix('@'), // Adds @ before each tag
```

You can use a closure for dynamic prefix:

```php
Tag::make('product_codes')
    ->prefix(fn () => auth()->user()->company->code . '-'),
```

## Limit

Restrict the number of tags that can be entered with the `limit()` method:

```php
Tag::make('categories')
    ->limit(5), // Limits to a maximum of 5 tags
```

You can use a closure for dynamic limit:

```php
Tag::make('keywords')
    ->limit(fn () => auth()->user()->hasPermission('seo') ? 10 : 5),
```

## Placeholder

Add a placeholder to guide users:

```php
Tag::make('keywords')
    ->placeholder('Type and press Enter to add tags...'),
```

You can use a closure for dynamic placeholder:

```php
Tag::make('tags')
    ->placeholder(fn () => 'Add up to ' . (auth()->user()->tag_limit ?? 5) . ' tags...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Tag;

Tag::make('hashtags')
    ->label('Hashtags')
    ->prefix('#')
    ->limit(10)
    ->placeholder('Add hashtags...')
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Tag::make('keywords')
    ->required(),
    
Tag::make('email_recipients')
    ->prefix('@')
    ->rule('array')
    ->rules('*.email'), // Validates each tag as an email
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Tag::make('tags')
    ->extraInputAttributes([
        'data-analytics-id' => 'tag-field',
        'autocomplete' => 'off',
    ]),
```

## Data Storage

Tags are stored as an array. When using with Eloquent models, you may want to use casting:

```php
// In your model
protected $casts = [
    'keywords' => 'array',
];
```

## Usage Example

```php
use TallStackUIFilament\Forms\Components\Tag;

// In a Filament resource or form
public static function form(Form $form): Form
{
    return $form
        ->schema([
            // Other fields...
            
            Tag::make('categories')
                ->label('Product Categories')
                ->prefix('#')
                ->limit(5)
                ->placeholder('Add categories...')
                ->required()
                ->helperText('Add up to 5 categories for this product'),
                
            // Other fields...
        ]);
}
```
