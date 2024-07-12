@extends('layout/aplikasi')
@section('konten')

<div>
  <a class="btn btn-secondary mb-3" href="/siswa">Kembali</a>
  <div class="card" style="width: 18rem;">
    <img src="{{url('foto').'/'.$data->foto}}" class="card-img-top" style="max-width: 500px">
    <div class="card-body">
      <h5 class="card-title">{{$data->nama}}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nomor Induk : {{$data->nomor_induk}}</li>
      <li class="list-group-item">Alamat : {{$data->alamat}}</li>
    </ul>
  </div>
</div>
    
@endsection