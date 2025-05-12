@extends('layouts.app')

@section('content')
<h2 class="mb-4">Tambah Data User</h2>

<a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nomor HP</label>
        <input type="text" name="nomor_hp" pattern="\d{9,13}" title="Isi nomor antara 9 sampai 13 digit" class="form-control" value="{{ old('nomor_hp') }}" required>
        
    </div>

    <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role" class="form-select" required>
            <option value="">-- Pilih Role --</option>
            @foreach(['Supervisor', 'Manager', 'Karyawan'] as $role)
                <option value="{{ $role }}" {{ old('role') == $role ? 'selected' : '' }}>{{ $role }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
