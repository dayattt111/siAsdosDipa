@extends('Mahasiswa.layout')

@section('title', 'Jadwal Asdos')
@section('page_title', 'Jadwal Asdos')

@section('content')
<div class="card">
  <h2 style="margin-top:0;margin-bottom:20px;color:#111">Jadwal Pendaftaran Asdos</h2>
  
  <div style="background:#f9fafb;padding:15px;border-radius:6px;margin-bottom:20px;border-left:4px solid #2563eb">
    <p style="margin:0;font-size:14px;color:#444">
      Berikut adalah jadwal pendaftaran asdos untuk semester ini.
      Pastikan anda mendaftar sesuai dengan jadwal yang telah ditentukan.
    </p>
  </div>

  @if($jadwal && count($jadwal) > 0)
    <table style="width:100%;border-collapse:collapse;margin-bottom:20px">
      <thead>
        <tr style="background:#f3f4f6;border-bottom:1px solid #e5e7eb">
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">No</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Periode</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Tanggal Mulai</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Tanggal Akhir</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Status</th>
          <th style="padding:12px;text-align:center;font-size:13px;color:#374151">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($jadwal as $key => $item)
        <tr style="border-bottom:1px solid #e5e7eb">
          <td style="padding:12px;font-size:13px">{{ $key+1 }}</td>
          <td style="padding:12px;font-size:13px">{{ $item->periode ?? '-' }}</td>
          <td style="padding:12px;font-size:13px">{{ $item->tgl_mulai ?? '-' }}</td>
          <td style="padding:12px;font-size:13px">{{ $item->tgl_akhir ?? '-' }}</td>
          <td style="padding:12px;font-size:13px">
            <span style="background:#dbeafe;color:#1e40af;padding:4px 8px;border-radius:4px;font-size:12px">Aktif</span>
          </td>
          <td style="padding:12px;text-align:center;font-size:13px">
            <button type="button" onclick="openAjukanForm('{{ $item->periode ?? 'Periode' }}')" style="padding:6px 12px;background:#2563eb;color:#fff;border:none;border-radius:4px;cursor:pointer;font-size:12px;font-weight:600">Ajukan</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <div style="background:#fef3c7;color:#92400e;padding:15px;border-radius:6px;border-left:4px solid #f59e0b;margin-bottom:20px">
      <p style="margin:0;font-size:14px">Belum ada jadwal pendaftaran</p>
    </div>
  @endif

  <div style="text-align:right">
    <a href="/jadwalMhs/status" style="padding:10px 20px;background:#6b7280;color:#fff;border-radius:6px;text-decoration:none;display:inline-block;font-weight:600;font-size:14px">Lihat Status Seleksi</a>
  </div>
</div>

<!-- Modal Form Ajukan Asdos -->
<div id="ajukanModal" style="display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:1000;overflow-y:auto">
  <div style="background:#fff;width:100%;max-width:500px;margin:50px auto;border-radius:8px;padding:30px;box-shadow:0 4px 20px rgba(0,0,0,0.15)">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px">
      <h2 style="margin:0;color:#111;font-size:20px">Ajukan Asdos</h2>
      <button type="button" onclick="closeAjukanForm()" style="background:none;border:none;font-size:24px;color:#999;cursor:pointer">&times;</button>
    </div>

    <form method="POST" action="/jadwalMhs/uploadDocs" enctype="multipart/form-data">
      @csrf

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Periode</label>
        <input type="text" id="periodeInput" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;background:#f5f5f5" readonly>
        <input type="hidden" name="periode" id="periodeHidden">
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Nama Mata Kuliah <span style="color:#dc2626">*</span></label>
        <input type="text" name="matakuliah" value="{{ old('matakuliah') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Dosen Pengampu <span style="color:#dc2626">*</span></label>
        <input type="text" name="dosen" value="{{ old('dosen') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
      </div>

      <div style="margin-bottom:15px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Upload Berkas <span style="color:#dc2626">*</span></label>
        <input type="file" name="berkas" style="width:100%;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:14px;box-sizing:border-box" required>
        <p style="margin:6px 0 0;font-size:12px;color:#666">Format: PDF, DOC, DOCX (Max 5MB)</p>
      </div>

      <div style="margin-bottom:20px">
        <label style="display:block;margin-bottom:6px;font-weight:600;font-size:13px;color:#333">Catatan</label>
        <textarea name="catatan" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;font-family:inherit;resize:vertical;min-height:80px;box-sizing:border-box">{{ old('catatan') }}</textarea>
      </div>

      <div style="display:flex;gap:10px">
        <button type="submit" style="flex:1;padding:10px 20px;background:#2563eb;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600;font-size:14px">Ajukan</button>
        <button type="button" onclick="closeAjukanForm()" style="flex:1;padding:10px 20px;background:#6b7280;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600;font-size:14px">Batal</button>
      </div>
    </form>
  </div>
</div>

<script>
function openAjukanForm(periode) {
  document.getElementById('periodeInput').value = periode;
  document.getElementById('periodeHidden').value = periode;
  document.getElementById('ajukanModal').style.display = 'block';
}

function closeAjukanForm() {
  document.getElementById('ajukanModal').style.display = 'none';
  // Reset form
  document.querySelector('#ajukanModal form').reset();
}

// Tutup modal saat klik di luar
window.onclick = function(event) {
  var modal = document.getElementById('ajukanModal');
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}
</script>

@endsection
