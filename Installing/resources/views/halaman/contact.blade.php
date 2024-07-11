@extends('layout/aplikasi')
@section('konten')
<h1>{{$title}}</h1>
<p>{{$content}}</p>
<ul>
  <li>Alamat : {{$profile['alamat']}}</li>
  <li>Telepon : {{$profile['telepon']}}</li>
</ul>
    
@endsection
 