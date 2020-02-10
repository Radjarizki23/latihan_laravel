<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Show Penggajihan</legend>
        Nip : <b>{{$gaji->nip}}</b><br>
        Nama : <b>{{$gaji->nama}}</b><br>
        Agama : <b>{{$gaji->agama}}</b><br>
        Jenis_Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
        Alamat : <b>{{$gaji->alamat}}</b><br>
        Jabatan : <b>{{$gaji->jabatan}}</b><br>
        Jam_Kerja : <b>{{$gaji->jam_kerja}}</b><br>

        @if ($gaji->jabatan == 'Manager')
           @php $many = 5000000; @endphp
        @elseif ($gaji->jabatan == 'Sekertaris')
           @php $many = 3500000; @endphp
        @else
           @php $many = 2500000; @endphp    
        @endif

        @if ($gaji->jam_kerja >= 150)
            @php $tambahan = $many*5/100 @endphp
        @elseif ($gaji->jam_kerja >= 200)
            @php $tambahan = $many*7.5/100 @endphp
        @elseif ($gaji->jam_kerja >= 250)
            @php $tambahan = $many*10/100 @endphp
        @else
            @php $tambahan = $many*0 @endphp
        @endif

        Gaji : <b> {{$many}} </b><br>
        Gaji Jam Kerja : <b> {{$tambahan}} </b><br>
        Total Gaji : <b> {{$many}} + {{$tambahan}} = {{$many+$tambahan}} </b><br>
    </fieldset>
</body>
</html>