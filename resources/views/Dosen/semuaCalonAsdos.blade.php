@extends('Dosen.layout')

@section('content')
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; border-bottom: 2px solid #3182ce; padding-bottom: 10px;">👥 Daftar Calon Asisten Dosen</h2>

<div style="max-width: 100%; margin: 0;">
    <div style="display: grid; grid-template-columns: 1fr; gap: 15px;">
        
        <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <div style="font-weight: 600; color: #333; font-size: 16px;">Calon Asdos: Budi Santoso</div>
                <p style="font-size: 13px; color: #666; margin-top: 4px;">Mendaftar untuk: Senin, 09.00</p>
            </div>
            <div style="display: flex; gap: 8px;">
                <a href="/Dosen/komentar/232220" style="background: #fbbf24; color: #333; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600;">Komentar</a>
                <a href="/Dosen/detail" style="background: #3182ce; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600;">Detail</a>
            </div>
        </div>

        <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <div style="font-weight: 600; color: #333; font-size: 16px;">Calon Asdos: Siti Aisyah</div>
                <p style="font-size: 13px; color: #666; margin-top: 4px;">Mendaftar untuk: Selasa, 13.00</p>
            </div>
            <div style="display: flex; gap: 8px;">
                <a href="/Dosen/komentar/232221" style="background: #fbbf24; color: #333; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600;">Komentar</a>
                <a href="/Dosen/detailCalonAsdos/232221" style="background: #3182ce; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600;">Detail</a>
            </div>
        </div>

        <div style="background: #f5f5f5; padding: 20px; border-radius: 8px; border: 1px solid #ddd; display: flex; justify-content: space-between; align-items: center; opacity: 0.6;">
            <div>
                <div style="font-weight: 600; color: #666; font-size: 16px;">Calon Asdos: Joni Iskandar</div>
                <p style="font-size: 13px; color: #d32f2f; margin-top: 4px; font-weight: 600;">Status: Sudah Ditolak</p>
            </div>
            <div style="display: flex; gap: 8px;">
                <button disabled style="background: #999; color: white; padding: 8px 16px; border-radius: 6px; border: none; cursor: not-allowed; font-size: 13px; font-weight: 600;">Komentar</button>
                <button disabled style="background: #999; color: white; padding: 8px 16px; border-radius: 6px; border: none; cursor: not-allowed; font-size: 13px; font-weight: 600;">Detail</button>
            </div>
        </div>
        
    </div>

    <div style="display: flex; justify-content: space-between; margin-top: 20px; padding-top: 15px; border-top: 1px solid #eee;">
        <a href="/Dosen/cekCalonAsdos" style="color: #3182ce; text-decoration: none; font-size: 14px; font-weight: 600;">← Kembali</a>
    </div>
</div>
@endsection