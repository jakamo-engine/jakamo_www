<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Ustawienia strony';

    protected static ?string $title = 'Ustawienia strony';

    protected string $view = 'filament.pages.site-settings';

    protected static ?int $navigationSort = 99;

    public ?string $phone = '';
    public ?string $whatsapp = '';

    public function mount(): void
    {
        $this->phone = Setting::get('phone', '+48600952627');
        $this->whatsapp = Setting::get('whatsapp', '+48600952627');
    }

    public function schema(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone')
                    ->label('Numer telefonu')
                    ->placeholder('+48600952627')
                    ->tel()
                    ->required(),
                TextInput::make('whatsapp')
                    ->label('Numer WhatsApp')
                    ->placeholder('+48600952627')
                    ->tel()
                    ->required(),
            ]);
    }

    public function save(): void
    {
        Setting::set('phone', $this->phone);
        Setting::set('whatsapp', $this->whatsapp);

        Notification::make()
            ->title('Ustawienia zapisane')
            ->success()
            ->send();
    }
}
