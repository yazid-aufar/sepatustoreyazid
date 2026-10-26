<?php

namespace App\Filament\Resources\ProductTransactions\Tables;

use App\Models\ProductTransaction;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter; // <-- Import SelectFilter
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProductTransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('shoe.thumbnail')
                    ->label('Thumbnail'),

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),

                TextColumn::make('booking_trx_id')
                    ->label('Booking ID')
                    ->searchable(),

                IconColumn::make('is_paid')
                    ->label('Paid')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
            ])
            ->filters([
                SelectFilter::make('shoe_id')
                    ->label('Shoe')
                    ->relationship('shoe', 'name'),
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),

                Action::make('approve')
                    ->label('Approve Payment')
                    ->action(function (ProductTransaction $record) {
                        $record->is_paid = true;
                        $record->save();

                        Notification::make()
                            ->title('Order Approved')
                            ->success()
                            ->body('The order has been approved successfully.')
                            ->send();
                    })
                    ->icon('heroicon-s-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn (ProductTransaction $record) => !$record->is_paid),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
