@extends('layout')

@section('content')

<div class="d-flex">
    <h4>Daftar Siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah Siswa</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Hobi</th>
    </tr>
    @foreach ($siswa as $no->$data)
    <tr>
        <th>{{ $no+1 }}</th>
        <th>{{ $data->nis }}</th>
        <th>{{ $data->nama }}</th>
        <th>{{ $data->jenis_kelamin }}</th>
        <th>{{ $data->kelas }}</th>
        <th>{{ $data->alamat }}</th>
        <th>{{ $data->hobi }}</th>
    </tr>
    @endforeach
</table>

@endsection