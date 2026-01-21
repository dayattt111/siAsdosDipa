@extends('Dosen.layout')

@section('content')
        <h2 style="margin-bottom: 20px;">Daftar Asdos</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mahasiswa</th>
                    <th>NIM</th>
                    <th>Mata Kuliah</th>
                    <th>Kode MK</th>
                    <th>Semester</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($asdos as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->mahasiswa->nama_user }}</td>
                    <td>{{ $item->mahasiswa->nim }}</td>
                    <td>{{ $item->mata_kuliah }}</td>
                    <td>{{ $item->kode_mk }}</td>
                    <td>{{ $item->semester }}</td>
                    <td>
                        <span class="badge {{ $item->status == 'aktif' ? 'badge-success' : 'badge-secondary' }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Belum ada asdos yang dibimbing</td>
                </tr>
                @endforelse
            </tbody>
        </table>

<style>
table { width: 100%; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
th, td { padding: 15px; text-align: left; }
th { background: #3182ce; color: white; }
tr:nth-child(even) { background: #f8f9fa; }
.badge { padding: 5px 10px; border-radius: 3px; font-size: 12px; }
.badge-success { background: #28a745; color: white; }
.badge-secondary { background: #6c757d; color: white; }
</style>
@endsection
