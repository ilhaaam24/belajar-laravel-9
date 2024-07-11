@extends('layout/aplikasi')
@section('konten')
<a href="/siswa/create" class="btn btn-primary btn-sm">Tambah Data Siswa</a>
  <table class="table">
   <thead>
    <th>Nomor Induk</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
   </thead>
   <tbody>
    @foreach($data as $item)
    <tr>
      <td>{{$item->nomor_induk}}</td>
      <td>{{$item->nama}}</td>
      <td>{{$item->alamat}}</td>
      <td><a class="btn btn-secondary btn-sm" href="{{url('/siswa/'.$item->nomor_induk)}}">Detail</a></td>
    </tr>
    @endforeach
   </tbody>
  </table>
  {{ $data->links() }}
@endsection