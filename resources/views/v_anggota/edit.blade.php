@extends('layouts.app')

@section('content')
<h3 class="mb-4">{{ $judul }}</h3>

<form action="{{ route('anggota.update', $edit->id) }}" method="POST" class="w-50">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $edit->nama) }}" placeholder="Masukkan Nama Lengkap" required>
    </div>

    <div class="mb-3">
        <label class="form-label">HP</label>
        <input type="number" name="hp" class="form-control" value="{{ old('hp', $edit->hp) }}" placeholder="Masukkan Nomor HP" required>
    </div>

    <button type="submit" class="btn btn-primary">Perbaharui</button>
    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
