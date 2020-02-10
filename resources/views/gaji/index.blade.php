<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Penggajihan</center><br>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Jenis_Kelamin</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($gaji as $gg)
        <tr>
            <td>{{$gg->nip}}</td>
            <td>{{$gg->nama}}</td>
            <td>{{$gg->jenis_kelamin}}</td>
            <td>{{$gg->jabatan}}</td>
            <td><a href="/gg/{{ $gg->id }}">Lihat</a></td>
        </tr> 
        @endforeach
        </tbody>
    </table>
</body>
</html>