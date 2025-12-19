@extends('Mahasiswa.layout')

@section('title', 'Ajukan Asdos')
@section('page_title', 'Ajukan Asdos')

@section('content')
<div class="card">
  <h2 style="margin:0 0 20px;color:#111">Formulir Ajukan Asdos</h2>

  <form method="POST" action="/jadwalMhs/uploadDocs" enctype="multipart/form-data" style="max-width:500px">
    @csrf

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Nama Mata Kuliah</label>
      <input type="text" name="matakuliah" value="{{ old('matakuliah') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px" required>
      @error('matakuliah')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Dosen Pengampu</label>
      <input type="text" name="dosen" value="{{ old('dosen') }}" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px" required>
      @error('dosen')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Upload Berkas</label>
      <input type="file" name="berkas" style="width:100%;padding:8px;border:1px solid #ddd;border-radius:6px;font-size:14px" required>
      @error('berkas')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
      <p style="margin:8px 0 0;font-size:12px;color:#666">Format: PDF, DOC, DOCX (Max 5MB)</p>
    </div>

    <div style="margin-bottom:20px">
      <label style="display:block;margin-bottom:8px;font-weight:600;font-size:14px;color:#333">Catatan</label>
      <textarea name="catatan" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:6px;font-size:14px;font-family:inherit;resize:vertical;min-height:100px">{{ old('catatan') }}</textarea>
      @error('catatan')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
    </div>

    <div style="display:flex;gap:10px">
      <button type="submit" style="padding:10px 20px;background:#2563eb;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600">Ajukan</button>
      <a href="/jadwalMhs" style="padding:10px 20px;background:#6b7280;color:#fff;border-radius:6px;text-decoration:none;display:inline-flex;align-items:center">Kembali</a>
    </div>
  </form>
</div>
@endsection
