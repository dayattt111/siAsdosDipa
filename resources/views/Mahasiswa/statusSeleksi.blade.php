@extends('Mahasiswa.layout')

@section('title', 'Status Seleksi')
@section('page_title', 'Status Seleksi Asdos')

@section('content')
<div class="card">
  <h2 style="margin:0 0 20px;color:#111">Status Seleksi Asdos Anda</h2>

  @if($status && count($status) > 0)
    <table style="width:100%;border-collapse:collapse">
      <thead>
        <tr style="background:#f3f4f6;border-bottom:1px solid #e5e7eb">
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">No</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Mata Kuliah</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Dosen</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Status</th>
          <th style="padding:12px;text-align:left;font-size:13px;color:#374151">Keterangan</th>
        </tr>
      </thead>
      <tbody>
        @foreach($status as $key => $item)
        <tr style="border-bottom:1px solid #e5e7eb">
          <td style="padding:12px;font-size:13px">{{ $key+1 }}</td>
          <td style="padding:12px;font-size:13px">{{ $item->matakuliah ?? '-' }}</td>
          <td style="padding:12px;font-size:13px">{{ $item->dosen ?? '-' }}</td>
          <td style="padding:12px;font-size:13px">
            @if($item->status === 'diterima')
              <span style="background:#dcfce7;color:#166534;padding:4px 8px;border-radius:4px;font-size:12px;font-weight:600">Diterima</span>
            @elseif($item->status === 'ditolak')
              <span style="background:#fee2e2;color:#991b1b;padding:4px 8px;border-radius:4px;font-size:12px;font-weight:600">Ditolak</span>
            @else
              <span style="background:#fef3c7;color:#92400e;padding:4px 8px;border-radius:4px;font-size:12px;font-weight:600">Proses</span>
            @endif
          </td>
          <td style="padding:12px;font-size:13px;color:#666">{{ $item->keterangan ?? '-' }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <div style="background:#fef3c7;color:#92400e;padding:15px;border-radius:6px;border-left:4px solid #f59e0b">
      <p style="margin:0;font-size:14px">Belum ada pengajuan asdos</p>
    </div>
  @endif
</div>
@endsection
