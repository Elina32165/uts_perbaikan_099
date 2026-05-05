@extends('layout.master')

@section('title', 'Edit Pasien')

@section('content')
<div class="card shadow-sm p-4">
    <h4>Edit Data Pasien</h4>
    <hr>
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="mb-3">
            <label class="form-label">No. Rekam Medis</label>
            <input type="text" name="no_rekam_medis" class="form-control" value="{{ $pasien->no_rekam_medis }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $pasien->nama_pasien }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" value="{{ $pasien->umur }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection