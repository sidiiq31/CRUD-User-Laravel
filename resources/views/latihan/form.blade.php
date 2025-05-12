@extends('layouts.app')

@section('content')
<div style="border:1px solid #000; padding:20px; max-width:600px;">
    <form method="POST" action="#">

        @csrf

        <div style="margin-bottom:25px;">
            <label for="nim" style="display:block; font-size:20px;">NIM</label>
            <input id="nim" name="nim" type="text"
                   style="width:320px; height:28px; font-size:16px;">
        </div>

        <div style="margin-bottom:25px;">
            <label for="nama" style="display:block; font-size:20px;">Nama Lengkap</label>
            <input id="nama" name="nama" type="text"
                   style="width:320px; height:28px; font-size:16px;">
        </div>

        <div style="margin-bottom:25px;">
            <label for="kelas" style="display:block; font-size:20px;">Kelas</label>
            <input id="kelas" name="kelas" type="text"
                   style="width:320px; height:28px; font-size:16px;">
        </div>

        <button type="submit"
                style="padding:6px 18px; font-size:18px; cursor:pointer;">
            Simpan
        </button>
    </form>
</div>
@endsection
