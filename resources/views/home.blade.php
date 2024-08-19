@extends('layouts.mainLayouts')
{{-- {--judul konten--} --}}
@section('title','Data siswa')
@section('content')
<div class="at-5">
</div>

    <div class="at-5">
        <h2>ini halaman home</h1>
        <h3>selamat datang {{$nama}}, Role anda adalah {{$role}}</h3>

        @if($role == 'admin')
        <a href="#">menuju halaman admin</a>
        @elseif($role == 'petugas')
        <a href="#">menuju halaman petugas</a>
        @else
        halaman tidak terdaftar
        @endif
        <br>
        <table class="table table-bordered">

            <td>nis</td>
            <td>nama_siswa</td>
            <td>jurusan</td>
            <td>tingkat</td>
            <td>ekskul</td>
            </tr>
<h1>Data siswa</h1>

      @foreach ($data as $siswa)
    <tr>
     <td>{{$siswa['nis']}},</td>
      <td>{{$siswa['nama_siswa']}},</td>
      <td>{{$siswa['jurusan']}},</td>
      <td>{{$siswa['tingkat']}},</td>
      <td>{{$siswa['ekskul']}},</td>
    </br>
    </tr>
      @endforeach
      </table>

      @endsection
