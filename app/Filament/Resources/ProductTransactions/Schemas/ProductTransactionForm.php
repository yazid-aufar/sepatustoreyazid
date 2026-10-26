<?php

namespace App\Filament\Resources\ProductTransactions\Schemas;

use App\Models\PromoCode;
use App\Models\Shoe;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;

class ProductTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Product and Price')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    Select::make('shoe_id')
                                        ->relationship('shoe', 'name')
                                        ->searchable()
                                        ->preload()
                                        ->required()
                                        ->live()
                                        ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                            $shoe = Shoe::find($state);
                                            $price = $shoe ? $shoe->price : 0;
                                            $quantity = $get('quantity') ?? 1;
                                            $subTotalAmount = $price * $quantity;

                                            $set('price', $price);
                                            $set('sub_total_amount', $subTotalAmount);

                                            $discount = $get('discount_amount') ?? 0;
                                            $grandTotalAmount = $subTotalAmount - $discount;
                                            $set('grand_total_amount', $grandTotalAmount);

                                            $sizes = $shoe ? $shoe->sizes->pluck('size', 'id')->toArray() : [];
                                            $set('shoe_sizes', $sizes);
                                        })
                                        ->afterStateHydrated(function ($state, Get $get, Set $set) {
                                            $shoeId = $state;
                                            if ($shoeId) {
                                                $shoe = Shoe::find($shoeId);
                                                $sizes = $shoe ? $shoe->sizes->pluck('size', 'id')->toArray() : [];
                                                $set('shoe_sizes', $sizes);
                                            }
                                        }),

                                    Select::make('shoe_size')
                                        ->label('Shoe Size')
                                        ->options(function (Get $get) {
                                            $sizes = $get('shoe_sizes');
                                            return is_array($sizes) ? $sizes : [];
                                        })
                                        ->required()
                                        ->live(),

                                    TextInput::make('quantity')
                                        ->numeric()
                                        ->required()
                                        ->prefix('Qty')
                                        ->live()
                                        ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                            $price = $get('price') ?? 0;
                                            $quantity = $state ?? 0;
                                            $subTotalAmount = $price * $quantity;

                                            $set('sub_total_amount', $subTotalAmount);

                                            $discount = $get('discount_amount') ?? 0;
                                            $grandTotalAmount = $subTotalAmount - $discount;
                                            $set('grand_total_amount', $grandTotalAmount);
                                        }),

                                    Select::make('promo_code_id')
                                        ->relationship('promoCode', 'code')
                                        ->searchable()
                                        ->preload()
                                        ->live()
                                        ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                            $subTotalAmount = $get('sub_total_amount') ?? 0;
                                            $promoCode = PromoCode::find($state);
                                            $discount = $promoCode ? $promoCode->discount_amount : 0;

                                            $set('discount_amount', $discount);

                                            $grandTotalAmount = $subTotalAmount - $discount;
                                            $set('grand_total_amount', $grandTotalAmount);
                                        }),

                                    TextInput::make('sub_total_amount')
                                        ->required()
                                        ->numeric()
                                        ->readOnly()
                                        ->prefix('IDR'),

                                    TextInput::make('grand_total_amount')
                                        ->required()
                                        ->numeric()
                                        ->readOnly()
                                        ->prefix('IDR'),

                                    TextInput::make('discount_amount')
                                        ->required()
                                        ->numeric()
                                        ->prefix('IDR'),
                                ]),
                        ]),

                    Step::make('Customer Information')
                        ->schema([
                            Grid::make(2)
                                ->schema([
                                    TextInput::make('name')
                                        ->required()
                                        ->maxLength(255),

                                    TextInput::make('phone')
                                        ->required()
                                        ->maxLength(255),

                                    TextInput::make('email')
                                        ->required()
                                        ->maxLength(255),

                                    Textarea::make('address')
                                        ->rows(5)
                                        ->required(),

                                    TextInput::make('city')
                                        ->required()
                                        ->maxLength(255),

                                    TextInput::make('post_code')
                                        ->required()
                                        ->maxLength(255),
                                ]),
                        ]),

                    Step::make('Payment Information')
                        ->schema([
                            TextInput::make('booking_trx_id')
                                ->required()
                                ->maxLength(255),

                            ToggleButtons::make('is_paid')
                                ->label('Apakah sudah membayar?')
                                ->boolean()
                                ->grouped()
                                ->icons([
                                    true => 'heroicon-o-check-circle',
                                    false => 'heroicon-o-x-circle',
                                ])
                                ->required(),

                            FileUpload::make('proof')
                                ->label('Bukti Pembayaran')
                                ->image()
                                ->required(),
                        ]),
                ])
                ->columnSpanFull()
                ->columns(1)
                ->skippable(),
            ]);
    }
}
