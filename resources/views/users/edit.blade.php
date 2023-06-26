@extends('base')
@section('title', 'edit user')
@section('content')
    <form hx-put="{{route('users.update', $user)}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" value="{{$user->email}}">
        </div>
        <button class="btn">Submit</button>
        <button class="btn" hx-get="{{route('users.show', $user)}}">Cancel</button>
    </form>
@endsection
