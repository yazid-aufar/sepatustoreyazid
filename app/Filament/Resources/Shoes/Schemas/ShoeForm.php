<?php

namespace App\Filament\Resources\Shoes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ShoeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Fieldset::make('Shoe Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('IDR'),

                        FileUpload::make('thumbnail')
                            ->image()
                            ->required(),

                        Repeater::make('photos')
                            ->relationship('photos')
                            ->schema([
                                FileUpload::make('photo')
                                    ->image()
                                    ->required(),
                            ]),

                        Repeater::make('sizes')
                            ->relationship('sizes')
                            ->schema([
                                TextInput::make('size')
                                    ->required(),
                            ]),
                    ]),

                Fieldset::make('Additional')
                    ->schema([
                        Textarea::make('about')
                            ->required(),

                        Select::make('is_popular')
                            ->options([
                                true => 'Popular',
                                false => 'Not Popular',
                            ])
                            ->required(),

                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('brand_id')
                            ->relationship('brand', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('stock')
                            ->required()
                            ->numeric()
                            ->prefix('Qty'),
                    ]),
            ]);
    }
}
