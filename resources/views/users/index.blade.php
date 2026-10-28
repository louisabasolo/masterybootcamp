@extends('layouts.master')

@section('title')
    Users Page
@endsection

@section('content')
    <h1 class="mt-5">USERS</h1>
    <div class="mt-3 mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-success"><img src="{{ asset('images/add-user.png') }}"
                alt="Add User" width="20" height="20" style="filter: brightness(0) invert(1)"> ADD NEW USER</a>
        <form action="{{ route('users.dummy') }}" method="POST"
            onsubmit="return confirm('Are you sure you want to add dummy users')" class="d-inline">
            @csrf
            <button class="btn btn-warning"> <img src="{{ asset('images/add-group.png') }}" alt="Add Dummy Users"
                    width="20" height="20"> ADD DUMMY USERS</button>
        </form>
    </div>
    @if ($users->isEmpty())
        <div class="row text-center">
            <h1>NO USERS FOUND</h1>
        </div>
    @else
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Joined On</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary px-4">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger px-3">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
{{ $users->links() }}
@endsection


@section('scripts')
    <script>
        console.log('users page');
    </script>
@endsection
