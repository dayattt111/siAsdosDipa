@extends('Dosen.layout')

@section('content')
<div style="max-width: 700px; margin: 0 auto;">
    <h2 style="font-size: 24px; color: #333; margin-bottom: 20px; border-bottom: 2px solid #3182ce; padding-bottom: 10px;">💬 Komentar dan Penilaian</h2>

    <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); margin-bottom: 20px;">
        
        <!-- Info Header -->
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; font-weight: 600; color: #666; padding: 10px 0; margin-bottom: 15px; border-bottom: 1px solid #eee; font-size: 13px;">
            <span>Nama</span>
            <span>Nim</span>
            <span>Pilihan Kelas</span>
        </div>

        <!-- Info Details -->
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; margin-bottom: 25px; font-size: 14px; color: #333;">
            <span>Calon Asdos</span>
            <span>13018001</span>
            <span>Framework</span>
        </div>

        <!-- Form -->
        <form action="/Dosen/kirimKomentar" method="POST">
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Komentar Dosen</label>
                <textarea name="komentar_dosen" placeholder="Tuliskan komentar Anda di sini..." style="width: 100%; min-height: 120px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; resize: vertical; font-family: inherit;"></textarea>
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; margin-bottom: 12px; color: #333; font-weight: 600;">Persetujuan</label>
                <div style="display: flex; gap: 30px;">
                    <label style="cursor: pointer; display: flex; align-items: center; gap: 8px;">
                        <input type="radio" name="persetujuan" value="setuju" checked style="cursor: pointer;" />
                        <span>Setuju</span>
                    </label>
                    <label style="cursor: pointer; display: flex; align-items: center; gap: 8px;">
                        <input type="radio" name="persetujuan" value="tidak_setuju" style="cursor: pointer;" />
                        <span>Tidak Setuju</span>
                    </label>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
                <a href="/Dosen/cekCalonAsdos" style="padding: 10px 20px; background: #6c757d; color: white; border-radius: 6px; text-decoration: none;">
                    ← Kembali
                </a>
                <button type="submit" style="padding: 10px 20px; background: #3182ce; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: 600;">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>
@endsection