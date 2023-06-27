@extends('base')
@section('title', 'create user')
@section('content')
    <form hx-post="{{route('users.store')}}" hx-indicator="#spinner">
    @csrf
        <label>Name: <input type="text" name="name"></label>
        <label>Email: <input type="email" name="email"></label>
        <label>Password: <input type="password" name="password"></label>
        <button type="submit">Submit</button>
    </form>
    <img id="spinner" class="htmx-indicator" src="{{\Illuminate\Support\Facades\URL::asset('/storage/spinner.gif')}}">
@endsection
