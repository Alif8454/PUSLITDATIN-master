@if (!empty($birthdayMessages))
    <div style="background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;">
        <h3 style="font-weight: bold; color: #333;">🎉 Ucapan Ulang Tahun Hari Ini 🎉</h3>
        <ul>
            @foreach ($birthdayMessages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@else
    <div style="background-color: #f1f1f1; padding: 15px; border-radius: 5px; margin-bottom: 15px;">
        <p style="font-weight: bold; color: #333;">Tidak ada pegawai yang berulang tahun hari ini 🎉</p>
    </div>
@endif
