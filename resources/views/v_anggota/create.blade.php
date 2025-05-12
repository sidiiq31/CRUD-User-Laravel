@extends('layouts.app')

@section('content')
<h3 class="mb-4">{{ $judul }}</h3>

<form action="{{ route('anggota.store') }}" method="POST" class="w-50">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
    </div>

    <div class="mb-3">
        <label class="form-label">HP</label>
        <input type="number" name="hp" class="form-control" placeholder="Masukkan Nomor HP" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
