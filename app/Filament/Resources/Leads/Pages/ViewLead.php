<?php

namespace App\Filament\Resources\Leads\Pages;

use App\Filament\Resources\Leads\LeadResource;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Storage;

class ViewLead extends ViewRecord
{
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        $actions = [
            EditAction::make(),
        ];

        if ($this->record->excel_file) {
            $actions[] = Action::make('download_excel')
                ->label('Pobierz Excel')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success')
                ->url(route('admin.lead.download', $this->record))
                ->openUrlInNewTab();
        }

        return $actions;
    }
}
