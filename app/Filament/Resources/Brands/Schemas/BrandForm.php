<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

                Components\FileUpload::make('logo')
                ->image()
                ->required(),
            ]);
    }
}
