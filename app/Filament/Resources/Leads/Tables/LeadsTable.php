<?php

namespace App\Filament\Resources\Leads\Tables;

use App\Models\Lead;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class LeadsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                SelectColumn::make('status')
                    ->label('Status')
                    ->options(Lead::STATUSES)
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Data')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
                TextColumn::make('name')
                    ->label('Imię i nazwisko')
                    ->searchable(),
                TextColumn::make('company')
                    ->label('Firma')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable(),
                TextColumn::make('phone')
                    ->label('Telefon')
                    ->searchable()
                    ->copyable(),
                TextColumn::make('use_case')
                    ->label('Zastosowanie')
                    ->badge()
                    ->searchable(),
                IconColumn::make('excel_file')
                    ->label('Plik')
                    ->boolean()
                    ->getStateUsing(fn ($record) => (bool) $record->excel_file),
                TextColumn::make('ip_address')
                    ->label('IP')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options(Lead::STATUSES),
                SelectFilter::make('use_case')
                    ->label('Zastosowanie')
                    ->options([
                        'Magazyn / stany i ruchy towarów'   => 'Magazyn',
                        'CRM / baza klientów i sprzedaż'    => 'CRM',
                        'Zlecenia / produkcja / zamówienia'  => 'Zlecenia',
                        'Faktury / finanse / rozliczenia'    => 'Faktury / finanse',
                        'HR / ewidencja pracowników'         => 'HR',
                        'Kilka rzeczy naraz'                 => 'Kilka naraz',
                        'Coś innego'                        => 'Inne',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
