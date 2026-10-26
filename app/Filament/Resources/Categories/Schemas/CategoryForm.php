<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

                Components\FileUpload::make('icon')
                ->image()
                ->required(),
            ]);
    }
}
