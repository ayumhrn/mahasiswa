@extends('layout/layout')

@section('title', 'Data of Mahasiswa')

@section('container')
    <div>
         <div class="col-6">
            <h1 class="mt-2">Data Mahasiswa</h1>
            <a href="/mahasiswadata/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

                <ul class="list-group">
                    @foreach( $mahasiswa as $mhs)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$mhs->nama}}
                        <a href="mahasiswadata/{{ $mhs->id }}" class="badge badge-info">Detail</a>
                    </li>         
                    @endforeach
                </ul>
            <br>
         </div>
    </div>
@endsection
