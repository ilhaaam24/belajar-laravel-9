@extends('layout/aplikasi')
@section('konten')

<div>
  <a href="/siswa" class="btn btn-secondary btn-sm mb-2">Kembali</a>
  <h2>{{$data->nama}}</h2>
  <p>
    <b>Nomor Induk : </b>{{$data->nomor_induk}}
  </p>
  <p>
    <b>Alamat      : </b>{{$data->alamat}}
  </p>

</div>
    
@endsection