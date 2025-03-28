# Time

The Time component provides a time picker interface for selecting hours and minutes. It offers various customization options for time format, range constraints, and time increments.

## Basic Usage

```php
use TallStackUIFilament\Forms\Components\Time;

Time::make('appointment_time')
    ->label('Appointment Time'),
```

## Time Format

Choose between 12-hour and 24-hour time formats:

```php
Time::make('start_time'), // 12-hour format with AM/PM (default)
    
Time::make('start_time')
    ->format(24), // 24-hour format
```

## Time Range Constraints

Limit the selectable time range with min and max constraints:

### Minute Constraints

```php
Time::make('appointment_time')
    ->minMinute(15), // Minimum minute is 15
    ->maxMinute(45), // Maximum minute is 45
```

### Hour Constraints

```php
Time::make('business_hours')
    ->minHour(9),  // Earliest hour is 9 (9:00 AM)
    ->maxHour(17), // Latest hour is 17 (5:00 PM)
```

You can combine these constraints:

```php
Time::make('delivery_time')
    ->minHour(10)
    ->maxHour(20)
    ->minMinute(0)
    ->maxMinute(30),
```

## Time Increments

Control the step size for hours and minutes:

```php
Time::make('appointment_time')
    ->stepHour(2),   // Hours increment by 2 (e.g., 9, 11, 13...)
    ->stepMinute(15), // Minutes increment by 15 (e.g., 0, 15, 30, 45)
```

## Helper Controls

Enable helper buttons for quick time selection:

```php
Time::make('meeting_time')
    ->helper(), // Enables helper buttons like "Now", "Reset"
```

## Placeholder

Add a placeholder to guide users:

```php
Time::make('start_time')
    ->placeholder('Select start time...'),
```

## Combining Features

```php
use TallStackUIFilament\Forms\Components\Time;

Time::make('meeting_time')
    ->label('Meeting Time')
    ->format(24)
    ->minHour(9)
    ->maxHour(18)
    ->stepMinute(15)
    ->helper()
    ->placeholder('Select a time between 9:00 and 18:00')
    ->required(),
```

## Business Hours Example

```php
Time::make('appointment_time')
    ->label('Appointment Time')
    ->minHour(9)     // Start at 9 AM
    ->maxHour(17)    // End at 5 PM
    ->stepMinute(30) // 30-minute increments
    ->format(12)     // 12-hour format
    ->helper()
    ->placeholder('Select a time during business hours')
    ->required()
    ->helperText('Business hours: 9:00 AM - 5:00 PM'),
```

## Validation

Add validation rules as needed:

```php
Time::make('end_time')
    ->required(),
```

## Additional Input Attributes

Add custom HTML attributes to the input element:

```php
Time::make('arrival_time')
    ->extraInputAttributes([
        'data-analytics-id' => 'time-picker',
    ]),
```
