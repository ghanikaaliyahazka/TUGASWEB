@extends('layouts.mainLayouts')

@section('title', 'Student')

@section('content')
halo ini halaman siswa
<table class="table">
    <tr>
        <th>NO</th>
        <th>Nama siswa</th>
        <th>gender</th>
        <th>Nis</th>
        <th>kelas</th>
    </tr>
    @foreach ($siswa as $data )
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$data['nama_siswa']}}</th>
        <th>{{$data['gender']}}</th>
        <th>{{$data['nis']}}</th>
        <th>{{$data['class_id']}}</th>
    </tr>

    @endforeach

</table>

@endsection
