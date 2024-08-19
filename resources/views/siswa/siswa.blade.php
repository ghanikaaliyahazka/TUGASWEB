<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini halaman detail</h1>
<h1>ini adalah detail produk dari id {{$data['nis']}}</h1>
<table>
    <tr>
        <td>nis</td>
        <td>:</td>
        <td>{{$data['nis']}}</td>
    </tr>
    <tr>
        <td>nama_siswa</td>
        <td>:</td>
        <td>{{$data['nama_siswa']}}</td>
    </tr>
    <tr>
        <td>jurusan</td>
        <td>:</td>
        <td>{{$data['jurusan']}}</td>
    </tr>
    <tr>
        <td>tingkat</td>
        <td>:</td>
        <td>{{$data['tingkat']}}</td>
    </tr>
    <tr>
        <td>ekskul</td>
        <td>:</td>
        <td>{{$data['ekskul']}}</td>
    </tr>
</table>
</body>
</html>
