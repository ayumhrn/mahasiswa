@extends('layout/layout')

@section('title', 'Detail Mahasiswa')

@section('container')
    <div>
         <div class="col-6">
            <h1 class="mt-2">Detail Mahasiswa</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$mahasiswa->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswa->nim}}</h6>
                    <br>
                    <h6 class="card-text">{{ $mahasiswa->email }}</h6>
                    <h6 class="card-text">{{ $mahasiswa->jurusan }}</h6>
                    <h6 class="card-text">{{ $mahasiswa->prodi }}</h6>
                    <br>

                    <a href="{{ $mahasiswa->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="{{ $mahasiswa->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/mahasiswadata" class="card-link">Kembali</a>
                </div>
            </div>
         </div>
    </div>
@endsection
