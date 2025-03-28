# Select

The Select component provides a dropdown menu for selecting one or multiple options from a list. It offers various features including searchability, grouping, and lazy loading.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Select;

Select::make('country')
    ->label('Country')
    ->options([
        ['label' => 'United States', 'value' => 'us'],
        ['label' => 'Canada', 'value' => 'ca'],
        ['label' => 'United Kingdom', 'value' => 'uk'],
        ['label' => 'Australia', 'value' => 'au'],
    ]),
```

## Options

Define the selectable options using the `options()` method:

```php
Select::make('status')
    ->options([
        ['label' => 'Pending', 'value' => 'pending'],
        ['label' => 'Processing', 'value' => 'processing'],
        ['label' => 'Completed', 'value' => 'completed'],
        ['label' => 'Cancelled', 'value' => 'cancelled'],
    ]),
```

You can also use closures or collections:

```php
use App\Models\Country;
use Illuminate\Support\Collection;

// Using a closure
Select::make('country')
    ->options(fn () => Country::all()->map(fn ($country) => [
        'label' => $country->name,
        'value' => $country->id,
    ])->toArray()),

// Using a collection
Select::make('category')
    ->options([
        ['label' => 'Electronics', 'value' => 1],
        ['label' => 'Clothing', 'value' => 2],
        ['label' => 'Books', 'value' => 3],
    ]),
```

## Multiple Selection

Enable multiple option selection with the `multiple()` method:

```php
Select::make('interests')
    ->multiple()
    ->options([
        ['label' => 'Sports', 'value' => 'sports'],
        ['label' => 'Music', 'value' => 'music'],
        ['label' => 'Travel', 'value' => 'travel'],
        ['label' => 'Cooking', 'value' => 'cooking'],
    ]),
```

## Custom Text Selection

Customize the selected option text display with the `select()` method:

```php
Select::make('user')
    ->options(fn () => User::all()->map(fn ($user) => [
        'label' => $user->name,
        'value' => $user->id,
    ])->toArray())
    ->select('label:label|value:value'),
```

## Searchable

Enable searching within options with the `searchable()` method:

```php
Select::make('country')
    ->searchable()
    ->options(fn () => Country::all()->map(fn ($country) => [
        'label' => $country->name,
        'value' => $country->id,
    ])->toArray()),
```

## Lazy Loading

Load options dynamically as the user scrolls with the `lazyLoading()` method:

```php
Select::make('product')
    ->lazyLoading(20) // Loads 20 items at a time
    ->options(fn () => Product::all()->map(fn ($product) => [
        'label' => $product->name,
        'value' => $product->id,
    ])->toArray()),
```

## Limit Selection

Limit the number of selectable options with the `limit()` method (useful for multiple selection):

```php
Select::make('tags')
    ->multiple()
    ->limit(5) // Limits selection to 5 tags maximum
    ->options(fn () => Tag::all()->map(fn ($tag) => [
        'label' => $tag->name,
        'value' => $tag->id,
    ])->toArray()),
```

## Disabled Options

Disable specific options:

```php
Select::make('framework')
    ->options([
        ['label' => 'TALL', 'value' => 1, 'disabled' => true],
        ['label' => 'LIVT', 'value' => 2],
    ]),
```

## Preview Images

Add images to options for better visualization:

```php
Select::make('developer')
    ->options([
        ['label' => 'Taylor Otwell', 'value' => 1, 'preview' => 'https://unavatar.io/github/taylorotwell'],
        ['label' => 'Nuno Maduro', 'value' => 2, 'preview' => 'https://unavatar.io/github/nunomaduro'],
        ['label' => 'Jess Archer', 'value' => 3, 'preview' => 'https://unavatar.io/github/jessarcher'],
    ])
    ->select('label:label|value:value|image:preview'),
```

## Option Grouping

Group options by category with the `group()` method:

```php
Select::make('location')
    ->group()
    ->options([
        [
            'label' => 'Brazil',
            'image' => 'https://example.com/flags/brazil.png',
            'description' => 'Brazil is a country known for being the land of samba.',
            'value' => [
                ['label' => 'São Paulo', 'value' => 4, 'image' => 'https://example.com/cities/sao-paulo.png'],
                ['label' => 'Rio de Janeiro', 'value' => 5, 'image' => 'https://example.com/cities/rio.png'],
                ['label' => 'Brasília', 'value' => 6, 'image' => 'https://example.com/cities/brasilia.png']
            ]
        ],
        [
            'label' => 'United States',
            'image' => 'https://example.com/flags/usa.png',
            'description' => 'The United States is a country known for being the land of opportunity.',
            'value' => [
                ['label' => 'New York', 'value' => 7, 'image' => 'https://example.com/cities/new-york.png'],
                ['label' => 'Los Angeles', 'value' => 8, 'image' => 'https://example.com/cities/los-angeles.png'],
                ['label' => 'Chicago', 'value' => 9, 'image' => 'https://example.com/cities/chicago.png']
            ]
        ],
    ]),
```

## After Slot Content

Add content after the select input with the `afterSlot()` method:

```php
use Illuminate\Support\HtmlString;

Select::make('category')
    ->afterSlot(new HtmlString('<button class="btn btn-sm">Add New</button>')),
```

## Ajax Request

Configure dynamic data loading via AJAX with the `request()` method:

```php
Select::make('city')
    ->request([
        'url' => route('api.cities.index'),
        'method' => 'GET',
        'params' => ['library' => 'TallStackUi'],
    ]),
```

## Placeholder

Add a placeholder to guide users:

```php
Select::make('priority')
    ->placeholder('Select priority level...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Select;

Select::make('products')
    ->label('Select Products')
    ->multiple()
    ->searchable()
    ->lazyLoading(10)
    ->limit(5)
    ->placeholder('Search for products...')
    ->options(fn () => Product::pluck('name', 'id')->toArray())
    ->required(),
```

## Validation

Add validation rules as needed:

```php
Select::make('country')
    ->required(),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Select::make('language')
    ->extraInputAttributes([
        'data-analytics-id' => 'language-selector',
    ]),
```
