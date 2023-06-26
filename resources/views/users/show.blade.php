@extends('base')
@section('title', 'show user')
@section('content')
    <div hx-target="this" hx-swap="outerhtml">
        <div><label>name</label>: {{ $user->name }}</div>
        <div><label>email</label>: {{ $user->email }}</div>
        <button hx-get="{{route('users.edit', $user)}}" class="btn btn-primary">click to edit</button>
    </div>
@endsection
