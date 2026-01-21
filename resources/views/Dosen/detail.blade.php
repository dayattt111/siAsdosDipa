@extends('Dosen.layout')

@section('content')
<style>
    .detail-label {
        width: 200px;
        flex-shrink: 0;
    }
</style>

<div style="max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 24px; color: #333; margin-bottom: 20px; border-bottom: 2px solid #3182ce; padding-bottom: 10px;">📋 Detail Calon Asdos</h2>
    
    <form action="/Dosen/cekCalonAsdos" method="POST">
        @csrf
        
        <div style="background: #f0f7ff; padding: 20px; border-radius: 8px; border-left: 4px solid #3182ce; margin-bottom: 20px;">
            <h3 style="font-size: 18px; color: #1e40af; margin-bottom: 15px;">Informasi Pendaftar</h3>
            
            <div style="display: flex; margin-bottom: 12px;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Nama</span>
                <span style="flex: 1; color: #333;">: Budi Santoso</span>
            </div>
            <div style="display: flex; margin-bottom: 12px;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Nim</span>
                <span style="flex: 1; color: #333;">: 13018001</span>
            </div>
            <div style="display: flex; margin-bottom: 12px;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Pilihan Jadwal</span>
                <span style="flex: 1; color: #333;">: Komputasi Dasar (Kelas A)</span>
            </div>
            <div style="display: flex; margin-bottom: 12px;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Alasan MHS</span>
                <span style="flex: 1; color: #333;">: Saya ingin memperdalam materi dan membantu teman-teman.</span>
            </div>
            <div style="display: flex;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Transkrip Nilai</span>
                <span style="flex: 1; color: #3182ce;"><a href="#" style="text-decoration: none;">Lihat File Transkrip.pdf</a></span>
            </div>
        </div>

        <div style="background: #f0fdf4; padding: 20px; border-radius: 8px; border-left: 4px solid #16a34a; margin-bottom: 20px;">
            <h3 style="font-size: 18px; color: #166534; margin-bottom: 15px;">Informasi Dosen & Rekomendasi</h3>
            
            <div style="display: flex; margin-bottom: 12px;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Dosen yang Merekomendasikan</span>
                <span style="flex: 1; color: #333;">: Dr. Ir. S. P. Widodo, M.Kom.</span>
            </div>
            <div style="display: flex; margin-bottom: 12px;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Alasan Dosen</span>
                <span style="flex: 1; color: #333;">: Mahasiswa ini memiliki nilai bagus di mata kuliah terkait dan aktif bertanya.</span>
            </div>
            <div style="display: flex;">
                <span class="detail-label" style="font-weight: 600; color: #666;">Status Persetujuan Dosen</span>
                <span style="flex: 1; color: #16a34a; font-weight: 600;">: Disetujui</span>
            </div>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 30px;">
            <a href="/Dosen/cekCalonAsdos" style="padding: 10px 20px; background: #6c757d; color: white; border-radius: 5px; text-decoration: none;">
                ← Kembali
            </a>
            <button type="submit" style="padding: 10px 20px; background: #3182ce; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Hubungi
            </button>
        </div>
    </form>
</div>
@endsection