@extends('layout.master')

@section('title', 'Daftar Pasien')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Pasien</h5>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary btn-sm">Tambah Pasien Baru</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>No. Rekam Medis</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasiens as $p)
                <tr>
                    <td>{{ $p->no_rekam_medis }}</td>
                    <td>{{ $p->nama_pasien }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>{{ $p->umur }} Tahun</td>
                    <td>
                        <div class="d-flex gap-2">
                            <!-- Bagian Edit (Soal No 5) -->
                            <a href="{{ route('pasien.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Bagian Hapus dengan Konfirmasi (Soal No 5) -->
                            <form action="{{ route('pasien.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data pasien ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection