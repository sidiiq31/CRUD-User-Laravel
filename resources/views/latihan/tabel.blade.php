<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
</head>
<body>
<div style="border:1px solid #000; padding:20px;">
    <h2 style="font-weight:bold;">Data Mahasiswa</h2>

    <table style="width:100%; border-collapse:separate; border:1px solid #000; border-spacing:0;">
        <thead>
            <tr>
                <th style="border:1px solid #000;">No</th>
                <th style="border:1px solid #000;">NIM</th>
                <th style="border:1px solid #000;">Nama</th>
                <th style="border:1px solid #000;">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $i => $mhs)
            <tr>
                <td style="border:1px solid #000;">{{ $i + 1 }}</td>
                <td style="border:1px solid #000;">{{ $mhs['nim'] }}</td>
                <td style="border:1px solid #000;">{{ $mhs['nama'] }}</td>
                <td style="border:1px solid #000;">{{ $mhs['kelas'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>