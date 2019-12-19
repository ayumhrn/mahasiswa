@extends('layout/layout')

@section('title', 'Input Company')

@section('container')
        <form action="companyadd" method="POST" class="mt-3">
            @csrf
            <input type="text" name="name_company" placeholder="Company's name">
            <br>
            <br>
            <input type="text" name="address" placeholder="Company's address">
            <br>
            <br>
            <button type="submit">Add</button>
        </form>
@endsection
