@extends('layouts.master')

@section('title')
    Users Page
@endsection

@section('content')
    <h1>USERS</h1>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Joined On</th>
                    <th scope="col">Edit</th>
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
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Edit</a>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection


@section('scripts')
    <script>
        console.log('users page');
    </script>
@endsection
