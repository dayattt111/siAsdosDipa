@extends('Dosen.layout')

@section('content')
<h2 style="font-size: 28px; color: #333; margin-bottom: 20px;">📅 Jadwal Asisten Dosen</h2>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <div style="display: flex; align-items: center; background: white; padding: 8px 16px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); width: 300px;">
        <span style="color: #999; margin-right: 8px;">🔍</span>
        <input type="text" placeholder="cari pendaftar / jadwal" style="flex: 1; outline: none; border: none; font-size: 14px;" />
    </div>
</div>

<table style="width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <thead style="background: #3182ce; color: white;">
        <tr>
            <th style="padding: 15px; text-align: left; width: 40px;">No</th>
            <th style="padding: 15px; text-align: left;">Nama Asdos</th>
            <th style="padding: 15px; text-align: left;">Mata Kuliah</th>
            <th style="padding: 15px; text-align: left;">Jadwal</th>
            <th style="padding: 15px; text-align: center;">Verifikasi</th>
            <th style="padding: 15px; text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr style="border-bottom: 1px solid #f0f0f0;">
            <td style="padding: 15px;">1</td>
            <td style="padding: 15px;">
                <div style="font-weight: 600; color: #333;">Siti Aisyah (191101001)</div>
                <div style="font-size: 13px; color: #666;">Semester 6 / Lulus Matkul</div>
            </td>
            <td style="padding: 15px;">Basis Data (Kelas A)</td>
            <td style="padding: 15px;">Senin, 14:00 - 16:00</td>
            <td style="padding: 15px; text-align: center;">
                <span style="background: #dcfce7; color: #15803d; padding: 4px 8px; border-radius: 4px; font-size: 12px;">✓ Yes</span>
            </td>
            <td style="padding: 15px; text-align: center;">
                <a href="/Dosen/detailAsdos" style="background: #3b82f6; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px; margin-right: 4px;">Detail</a>
                <a href="/Dosen" style="background: #fbbf24; color: #333; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px;">Hubungi</a>
            </td>
        </tr>
    </tbody>
</table>

<a href="#" style="display: block; text-align: right; margin-top: 16px; color: #3182ce; text-decoration: none; font-size: 14px;">Show more</a>
@endsection