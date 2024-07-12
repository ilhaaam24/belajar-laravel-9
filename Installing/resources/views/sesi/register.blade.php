@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
      <h2 class="text-center">Register </h2>
      <form action="/sesi/create" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{Session::get('name')}}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{Session::get('email')}}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3 d-grid">
          <button name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
    </div>
@endsection