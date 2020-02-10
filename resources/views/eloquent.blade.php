<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</Em></title>
</head>
<body>
        <div class="col-sm-8 col-sm-offset-2">
            @foreach ($data as $temp)
            <h3><small>{{$temp->nama}} [{{$temp->nim}}]</small></h3>
            <h5>Hobi : 
                @foreach($temp->hobi as $tampung)
                    <small>{{$tampung->hobi}}, </small>
                @endforeach
            </h5>
            <h4>
                <li>Nama Wali : {{$temp->wali->nama}}<strong></strong></li>
                <li>Dosen Pembingbing : {{$temp->dosen->nama}}<strong></strong></li>
            </h4>
            <hr/>
            @endforeach
            </div>
</body>
</html>
