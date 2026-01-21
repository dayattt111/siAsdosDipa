@extends('Dosen.layout')

@section('content')
<h2 style="font-size: 28px; color: #333; margin-bottom: 20px;">��� Daftar Asisten Dosen Mata Kuliah Anda</h2>

<div style="background: #f5f5f5; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
    <form action="/Dosen" method="post" style="display: flex; gap: 15px; flex-wrap: wrap; align-items: flex-end;">
        @csrf
        <div style="flex: 1; min-width: 250px;">
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 5px; color: #333;">Cari Nama Asdos / Mata Kuliah</label>
            <div style="position: relative;">
                <input type="text" name="search" placeholder="Contoh: Budi atau Komputasi" style="width: 100%; padding: 8px 12px 8px 35px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px;" />
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #999;">���</span>
            </div>
        </div>

        <div style="min-width: 200px;">
            <label style="display: block; font-size: 14px; font-weight: 600; margin-bottom: 5px; color: #333;">Filter Mata Kuliah</label>
            <select name="filter_matkul" style="width: 100%; padding: 8px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px;">
                <option value="">Semua Mata Kuliah</option>
                <option value="komputasi">Komputasi</option>
                <option value="aljabar">Aljabar Linier</option>
                <option value="struktur">Struktur Data</option>
            </select>
        </div>

        <button type="submit" style="padding: 8px 20px; background: #3182ce; color: white; border: none; border-radius: 6px; font-weight: 600; cursor: pointer;">Terapkan</button>
    </form>
</div>

<div style="display: flex; flex-direction: column; gap: 15px;">
    <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid #3182ce; box-shadow: 0 2px 4px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center;">
        <div>
            <p style="font-size: 18px; font-weight: 600; color: #333;">Jadwal Komputasi</p>
            <p style="font-size: 14px; color: #666;">Asisten Dosen: Budi Santoso</p>
        </div>
        <a href="#" style="background: #16a34a; color: white; padding: 8px 16px; border-radius: 20px; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">��� Hubungi via WA</a>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid #3182ce; box-shadow: 0 2px 4px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center;">
        <div>
            <p style="font-size: 18px; font-weight: 600; color: #333;">Jadwal Aljabar Linier</p>
            <p style="font-size: 14px; color: #666;">Asisten Dosen: Sita Dewi</p>
        </div>
        <a href="#" style="background: #16a34a; color: white; padding: 8px 16px; border-radius: 20px; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">��� Hubungi via WA</a>
    </div>

    <div style="background: white; padding: 20px; border-radius: 10px; border-left: 4px solid #3182ce; box-shadow: 0 2px 4px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center;">
        <div>
            <p style="font-size: 18px; font-weight: 600; color: #333;">Jadwal Struktur Data</p>
            <p style="font-size: 14px; color: #666;">Asisten Dosen: Joni Iskandar</p>
        </div>
        <a href="#" style="background: #16a34a; color: white; padding: 8px 16px; border-radius: 20px; text-decoration: none; font-size: 14px; display: flex; align-items: center; gap: 8px;">��� Hubungi via WA</a>
    </div>
</div>

<div style="display: flex; justify-content: space-between; margin-top: 30px; padding-top: 15px; border-top: 1px solid #eee;">
    <a href="/Dosen" style="color: #3182ce; text-decoration: none; font-size: 14px; font-weight: 600;">← Kembali</a>
</div>
@endsection
