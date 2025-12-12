<?php

namespace App\Components;

use Filament\Forms\Components\TextInput;

class CustomRangeComponent extends TextInput
{
    public static function make(?string $name = null): static
    {
        return parent::make($name)
            ->numeric()
            ->minValue(5)
            ->maxValue(10);
    }
}
