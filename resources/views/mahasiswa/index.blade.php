@extends('layout.main')
@section('title', 'Mahasiswa')
@section('container')

  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Daftar Mahasiswa</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Nim</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Email</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($mahasiswa as $mhs)  
          <tr>
            <th scope="row">{{$loop->iteration }}</th>
              <th>{{ $mhs->nama }}</th>
              <th>{{ $mhs ->nim}}</th>
              <th>{{ $mhs->jurusan}}</th>
              <th>{{ $mhs ->email}}</th>
            <th>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
            </th>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> 

  @endsection