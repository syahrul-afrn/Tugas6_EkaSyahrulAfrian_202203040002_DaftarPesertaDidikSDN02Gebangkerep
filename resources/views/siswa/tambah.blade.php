@extends('layout')

@section('content')  

<h4>Tambah</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>NIS</label>
    <input type="number" name="nis" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" class="form-control mb-2">
    <label>Kelas</label>
    <input type="number" name="kelas" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
    
</form>

@endsection