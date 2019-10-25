@extends('layout.main')
@section('title', 'edit')
@section('container')

  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Ubah Data Mahasiswa</h1>
       
      <form method="post" action="/students/{{$student->id}}">
        @method('put')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama" id="nama" placeholder="Masukan Nama" value="{{$student->nama}}">
                @error ('nama')
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
            </div>
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" id="nim" placeholder="Masaukan Nim" value="{{$student->nim}}"> @error ('nim')
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masaukan Email" value="{{$student->email}}"  @error ('email')>
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="Masaukan Jurusan" value="{{$student->jurusan}}"> @error ('jurusan')
                <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
            </div>

            <button type="submit" class="btn btn-primary">ubah data</button>
        </form>

      </div>
    </div>
  </div> 

@endsection