@extends('base')
@section('title', 'index')
@section('content')
        <table class="table delete-row-example">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody hx-confirm="Are you sure?" hx-target="closest tr" hx-swap="outerHTML swap:1s">
            @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form>
                            @csrf
                            <button class="btn btn-danger" hx-delete="{{ route('users.destroy', $user) }}">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No users</p>
            @endforelse
            </tbody>
        </table>
@endsection
