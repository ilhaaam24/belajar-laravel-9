@extends('layout/aplikasi')
@section('konten')
<a class="btn btn-secondary mb-3" href="/siswa">Kembali</a>
<form method="post" action="/siswa">
  @csrf
  <div class="mb-3">
    <label for="nomor_induk" class="form-label">Nomor Induk</label>
    <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" value="{{Session::get('nomor_induk')}}">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" value="{{Session::get('nama')}}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" name="alamat" cols="20" rows="5">{{Session::get('alamat')}}"</textarea>
  </div>
  <div class="mb-3">
    <button class="btn btn-primary">Simpan</button>
  </div>
</form>
@endsection