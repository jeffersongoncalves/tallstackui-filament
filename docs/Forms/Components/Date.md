# Date

The Date component provides an intuitive date picker interface for selecting dates. It supports various configuration options for date ranges, formats, and selection modes.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Date;

Date::make('birth_date')
    ->label('Birth Date'),
```

## Date Format

Customize the date format with the `format()` method:

1. You can use all Day.js formats.
2. The formats are applicable only visually. The default backend format will always be YYYY-MM-DD
3. The default date format sent to the component should be YYYY-MM-DD

```php
Date::make('appointment_date')
    ->format('YYYY-MM-DD'), // Default format
    
Date::make('schedule_date')
    ->format('YYYY, MMMM, DD'),
    
Date::make('publication_date')
    ->format('DD [of] MMMM [of] YYYY'), // e.g., "Jan 1, 2023"
```

## Date Range Constraints

Limit the selectable dates with min and max date constraints:

```php
use Illuminate\Support\Carbon;

Date::make('event_date')
    ->minDate('2023-01-01'), // String date
    
Date::make('deadline')
    ->minDate(Carbon::now()), // Current date
    
Date::make('historical_date')
    ->maxDate('2023-12-31'),
    
Date::make('schedule_date')
    ->minDate(Carbon::now())
    ->maxDate(Carbon::now()->addMonths(3)),
```

## Year Range Constraints

Limit the selectable years with min and max year constraints:

```php
Date::make('birth_date')
    ->minYear(1950)
    ->maxYear(2023),
```

## Disabled Dates

Disable specific dates that cannot be selected:

```php
Date::make('appointment_date')
    ->disableDates([
        '2023-12-25', // Christmas
        '2023-12-31', // New Year's Eve
    ]),
    
// Using Carbon instances
use Illuminate\Support\Carbon;

Date::make('meeting_date')
    ->disableDates([
        Carbon::now()->addDays(1),
        Carbon::now()->addDays(2),
    ]),
    
// Using a Collection
Date::make('delivery_date')
    ->disableDates(collect(['2023-12-25', '2023-12-26'])),
```

## Date Range Selection

Enable selecting a date range with the `range()` method:

```php
Date::make('vacation_period')
    ->range(), // Allows selecting a date range
```

## Multiple Date Selection

Enable selecting multiple dates with the `multiple()` method:

```php
Date::make('holiday_dates')
    ->multiple(), // Allows selecting multiple individual dates
```

## Month and Year Only Selection

Enable selecting only month and year, without the specific day:

```php
Date::make('credit_card_expiry')
    ->monthYearOnly(), // Shows only month and year picker
```

## Date Picker Helpers

Enable date picker helper buttons (today, clear, etc.):

```php
Date::make('start_date')
    ->helpers(), // Enables helper buttons
```

## Placeholder

Add a placeholder to guide users:

```php
Date::make('event_date')
    ->placeholder('Select event date...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Date;
use Illuminate\Support\Carbon;

Date::make('conference_dates')
    ->label('Conference Dates')
    ->format('MMM D, YYYY')
    ->minDate(Carbon::now())
    ->maxDate(Carbon::now()->addYear())
    ->minYear(Carbon::now()->year)
    ->maxYear(Carbon::now()->year + 2)
    ->disableDates([
        Carbon::now()->next('Saturday'),
        Carbon::now()->next('Sunday'),
    ])
    ->range()
    ->helpers()
    ->placeholder('Select conference dates')
    ->required(),
```

## Validation

Add validation rules as needed:

```php
use Illuminate\Validation\Rules\Exists;

Date::make('departure_date')
    ->required()
    ->afterOrEqual('today'),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Date::make('event_date')
    ->extraInputAttributes(['data-analytics' => 'date-selected']),
```
