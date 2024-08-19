@extends('layouts.mainLayouts')

@section('title', 'class')

@section('content')
halo ini halaman siswa
<table class="table">
    <tr>
        <th>NO</th>
        <th>Nama kelas</th>

    </tr>
    @foreach ($siswa as $data )
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$data['name']}}</th>


    </tr>

    @endforeach

</table>

@endsection
