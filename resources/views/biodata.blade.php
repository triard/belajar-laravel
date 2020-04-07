<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h1>Laravel</h1>
    <p>entahlah apa yang merasukimu</p>
    <p>Nama : {{$nama}} </p>
    <p>Matkul : </p>
    <ul>
        @foreach($matkul as $m)
        <li>{{$m}}</li>
        @endforeach
    </ul>
</body>
</html>