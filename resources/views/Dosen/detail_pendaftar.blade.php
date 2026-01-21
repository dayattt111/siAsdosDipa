@extends('Dosen.layout')

@section('content')
<div style="max-width: 800px; margin: 0 auto;">
    <h2 style="font-size: 24px; color: #333; margin-bottom: 20px; border-bottom: 2px solid #3182ce; padding-bottom: 10px;">📋 Detail Pendaftar Asdos</h2>
    
    <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 20px;">
        <h3 style="color: #3182ce; margin-bottom: 20px;">Informasi Pendaftar</h3>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee;">
            <div style="font-weight: 600; color: #333;">Nama Mahasiswa</div>
            <div style="color: #666;">{{ $pendaftar->mahasiswa->nama_user ?? 'N/A' }}</div>
        </div>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee;">
            <div style="font-weight: 600; color: #333;">NIM</div>
            <div style="color: #666;">{{ $pendaftar->mahasiswa->nim ?? 'N/A' }}</div>
        </div>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee;">
            <div style="font-weight: 600; color: #333;">Mata Kuliah</div>
            <div style="color: #666;">{{ $pendaftar->nama_mk ?? 'N/A' }}</div>
        </div>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee;">
            <div style="font-weight: 600; color: #333;">Kode MK</div>
            <div style="color: #666;">{{ $pendaftar->kode_mk ?? 'N/A' }}</div>
        </div>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee;">
            <div style="font-weight: 600; color: #333;">Semester</div>
            <div style="color: #666;">{{ $pendaftar->semester ?? 'N/A' }}</div>
        </div>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0; border-bottom: 1px solid #eee;">
            <div style="font-weight: 600; color: #333;">Status</div>
            <div>
                @if($pendaftar->status == 'pending')
                    <span style="background: #fef3c7; color: #92400e; padding: 4px 8px; border-radius: 4px; font-size: 12px;">⏳ Pending</span>
                @elseif($pendaftar->status == 'disetujui')
                    <span style="background: #dcfce7; color: #15803d; padding: 4px 8px; border-radius: 4px; font-size: 12px;">✓ Disetujui</span>
                @elseif($pendaftar->status == 'ditolak')
                    <span style="background: #fee2e2; color: #991b1b; padding: 4px 8px; border-radius: 4px; font-size: 12px;">✗ Ditolak</span>
                @endif
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: 180px 1fr; gap: 15px; padding: 15px 0;">
            <div style="font-weight: 600; color: #333;">Motivasi</div>
            <div style="color: #666;">{{ $pendaftar->motivasi ?? 'N/A' }}</div>
        </div>
    </div>

    @if($pendaftar->komentar)
    <div style="background: #f0f7ff; padding: 20px; border-radius: 10px; border-left: 4px solid #3182ce; margin-bottom: 20px;">
        <h3 style="color: #1e40af; margin-bottom: 15px;">💬 Komentar Anda</h3>
        <p style="color: #333; line-height: 1.6;">{{ $pendaftar->komentar }}</p>
    </div>
    @endif

    <div style="display: flex; gap: 10px; margin-top: 30px;">
        <a href="/dosen/pendaftar" style="padding: 10px 20px; background: #6c757d; color: white; border-radius: 5px; text-decoration: none;">
            ← Kembali
        </a>
    </div>
</div>
@endsection
