<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\DataPegawai;

class BirthdayNotification extends Widget
{
    protected static string $view = 'filament.widgets.birthday-notification';



    public function getData(): array
    {
        // Ambil data pegawai yang ulang tahun hari ini
        $birthdays = DataPegawai::whereMonth('tanggal_lahir', now()->month)
            ->whereDay('tanggal_lahir', now()->day)
            ->get();

        // Format pesan ulang tahun
        $birthdayMessages = $birthdays->map(function ($pegawai) {
            return "Selamat Ulang Tahun kepada {$pegawai->nama} ({$pegawai->tanggal_lahir->format('d M')})";
        })->toArray();

        return [
            'birthdayMessages' => $birthdayMessages,
        ];
    }
}
