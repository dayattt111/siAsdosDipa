@extends('Dosen.layout')

@section('content')
<h2 style="font-size: 24px; color: #333; margin-bottom: 20px; border-bottom: 2px solid #3182ce; padding-bottom: 10px;">👥 Daftar Pendaftar Asdos</h2>

<table style="width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <thead style="background: #3182ce; color: white;">
        <tr>
            <th style="padding: 15px; text-align: left;">No</th>
            <th style="padding: 15px; text-align: left;">Mahasiswa</th>
            <th style="padding: 15px; text-align: left;">NIM</th>
            <th style="padding: 15px; text-align: left;">Mata Kuliah</th>
            <th style="padding: 15px; text-align: left;">IPK</th>
            <th style="padding: 15px; text-align: left;">Semester</th>
            <th style="padding: 15px; text-align: left;">Status</th>
            <th style="padding: 15px; text-align: center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pendaftar as $index => $item)
        <tr style="border-bottom: 1px solid #f0f0f0;">
            <td style="padding: 15px;">{{ $index + 1 }}</td>
            <td style="padding: 15px;">{{ $item->mahasiswa->nama_user }}</td>
            <td style="padding: 15px;">{{ $item->mahasiswa->nim }}</td>
            <td style="padding: 15px;">{{ $item->mata_kuliah }}</td>
            <td style="padding: 15px;">{{ $item->ipk }}</td>
            <td style="padding: 15px;">{{ $item->semester }}</td>
            <td style="padding: 15px;">
                @if($item->status == 'pending')
                    <span style="background: #ffc107; color: #333; padding: 5px 10px; border-radius: 3px; font-size: 12px;">Menunggu</span>
                @elseif($item->status == 'disetujui')
                    <span style="background: #28a745; color: white; padding: 5px 10px; border-radius: 3px; font-size: 12px;">✓ Disetujui</span>
                @else
                    <span style="background: #dc3545; color: white; padding: 5px 10px; border-radius: 3px; font-size: 12px;">✗ Ditolak</span>
                @endif
            </td>
            <td style="padding: 12px; text-align: center;">
                <a href="/dosen/pendaftar/{{ $item->id }}" style="background: #3b82f6; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px; margin-right: 4px;">Detail</a>
                @if($item->status == 'pending')
                    <form style="display: inline;" method="POST" action="/dosen/pendaftar/{{ $item->id }}/approve">
                        @csrf
                        <button type="submit" style="background: #28a745; color: white; padding: 6px 12px; border-radius: 4px; border: none; cursor: pointer; font-size: 12px; margin-right: 1px;">Setuju</button>
                    </form>
                    <button onclick="showRejectModal({{ $item->id }})" style="background: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; border: none; cursor: pointer; font-size: 12px;">Tolak</button>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" style="text-align: center; padding: 20px;">Belum ada pendaftar</td>
        </tr>
        @endforelse
    </tbody>
</table>

<!-- Modal Reject -->
<div id="rejectModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 30px; border-radius: 10px; max-width: 500px; width: 90%;">
        <h3 style="margin-top: 0; color: #333;">Tolak Pendaftar</h3>
        <form id="rejectForm" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Komentar Penolakan</label>
                <textarea name="komentar" placeholder="Masukkan alasan penolakan..." style="width: 100%; min-height: 100px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; resize: vertical;" required></textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 10px;">
                <button type="button" onclick="closeRejectModal()" style="padding: 10px 20px; background: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer;">Batal</button>
                <button type="submit" style="padding: 10px 20px; background: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">Tolak</button>
            </div>
        </form>
    </div>
</div>

<script>
function showRejectModal(pendaftarId) {
    const modal = document.getElementById('rejectModal');
    const form = document.getElementById('rejectForm');
    form.action = '/dosen/pendaftar/' + pendaftarId + '/reject';
    modal.style.display = 'flex';
}

function closeRejectModal() {
    document.getElementById('rejectModal').style.display = 'none';
}

// Close modal when clicking outside
document.getElementById('rejectModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeRejectModal();
    }
});
</script>
@endsection
