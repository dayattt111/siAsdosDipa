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
    <table style="width:100%;border-collapse:collapse">
      <thead>
        <tr style="background:#f3f4f6;border-bottom:1px solid #e5e7eb">
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">No</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Periode</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Tanggal Mulai</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Tanggal Akhir</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Status</th>
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
        </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <div style="background:#fef3c7;color:#92400e;padding:15px;border-radius:6px;border-left:4px solid #f59e0b">
      <p style="margin:0;font-size:14px">Belum ada jadwal pendaftaran</p>
    </div>
  @endif
</div>
@endsection
