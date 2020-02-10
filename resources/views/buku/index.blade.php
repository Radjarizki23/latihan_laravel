<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><hr>
    <center>Daftar Buku</center><hr>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
                <th>Status</th>
                <th>Synopsis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($buku as $book)
        <tr>
            <td>{{$book->judul}}</td>
            <td>{{$book->jumlah_halaman}}</td>
            <td>{{$book->penerbit}}</td>
            <td>{{$book->status}}</td>
            <td>{{$book->synopsis}}</td>
            <td><a href="/book/{{ $book->id }}">Lihat</a><td>
        </tr> 
        @endforeach
        </tbody>
    </table><hr>
</body>
</html>