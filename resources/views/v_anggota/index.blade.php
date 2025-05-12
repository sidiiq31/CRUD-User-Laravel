@extends('layouts.app')

@section('content')
<h3 class="mb-4">{{ $judul }}</h3>

<a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table table-bordered table-striped w-75">
    <thead class="table-dark">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($index as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->hp }}</td>
            <td>
                <a href="{{ route('anggota.edit', $row->id) }}" class="btn btn-warning btn-sm">Ubah</a>

                <form action="{{ route('anggota.destroy', $row->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
