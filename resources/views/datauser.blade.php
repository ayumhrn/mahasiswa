@extends('layout/layout')

@section('title', 'Data of User')

@section('container')
   <div>

         <div class="col-10">
            @foreach($data as $item)
            <h1 class="mt-2">{{$item->name_user}}</h1>
            <br>
            @endforeach
         </div>
 
   </div>
@endsection
