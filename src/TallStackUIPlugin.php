<?php

declare(strict_types = 1);

namespace TallStackUIFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;

class TallStackUIPlugin implements Plugin
{
    public function getId(): string
    {
        return 'tallstackui';
    }

    public function register(Panel $panel): void
    {
    }

    public function boot(Panel $panel): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_START,
            fn (): string => Blade::render('<x-tallstackuifilament::scripts />'),
        );
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
