@extends('layouts.app')

@section('content')
<h2 class="mb-4">Edit Data User</h2>

<a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $user->nama) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nomor HP</label>
        <input type="text" name="nomor_hp" pattern="\d{9,13}" title="Isi nomor antara 9 sampai 13 digit" class="form-control" value="{{ old('nomor_hp', $user->nomor_hp) }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role" class="form-select" required>
            @foreach(['Supervisor', 'Manager', 'Karyawan'] as $role)
                <option value="{{ $role }}" {{ $user->role == $role ? 'selected' : '' }}>{{ $role }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="1" {{ $user->status ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ !$user->status ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
