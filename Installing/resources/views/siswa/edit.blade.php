@extends('layout/aplikasi')
@section('konten')
<a class="btn btn-secondary mb-3" href="/siswa">Kembali</a>
<form method="post" action="/siswa/{{$data->nomor_induk}}" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-3">
    <h1>Nomor Induk : {{$data->nomor_induk}}</h1>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" name="alamat" cols="20" rows="5">{{$data->alamat}}"</textarea>
  </div>
  @if ($data->foto)
      <div class="mb-3"><img src="{{url('foto').'/'.$data->foto}}" style="max-width: 100px; max-height: 100px" ></div>
  @endif
   <div class="mb-3">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" name="foto" id="foto">
  </div>
  <div class="mb-3">
    <button class="btn btn-primary">Update</button>
  </div>
</form>
@endsection