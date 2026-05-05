@extends('layout.master')

@section('title', 'Tambah Pasien')

@section('content')
<div class="card shadow-sm p-4">
    <h4>Form Tambah Pasien</h4>
    <hr>
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">No. Rekam Medis</label>
            <input type="text" name="no_rekam_medis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Data</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection