@extends('layout/layout')

@section('title', 'Input User')

@section('container')
        <form action="useradd" method="POST" class="mt-3">
            @csrf
            <input type="text" name="name_user" placeholder="Name">
            <br>
            <br>
            <input type="text" name="gender" placeholder="Gender">
            <br>
            <br>
            <button type="submit">Add</button>
        </form>
@endsection
