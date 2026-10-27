@extends('layouts.master')

@section('title')
    Users Page
@endsection

@section('content')
    <div class="col-6 offset-4 pt-5">
        <h2 class="text-center">Edit User {{ $user->id }}</h2>
        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="inputName" class="form-label">Name</label>
                <input name="name" value="{{ $user->name }}" type="text"
                    class="form-control  @error('name') is-invalid @enderror" id="name" aria-describedby="inputName">
                @error('name')
                    <div id="inputName" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input name="email" value="{{ $user->email }}" type="email"
                    class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="inputEmail">

                @error('email')
                    <div id="inputEmail" class="invalid-feedback">{{ $message }}</div>
                @else
                    <div id="inputEmail" class="form-text">We'll never share your email with anyone else.</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    id="inputPassword">
                @error('password')
                    <div id="inputPassword" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                <input name="password_confirmation" type="password"
                    class="form-control @error('password_confirmation') is-invalid @enderror" id="inputConfirmPassword">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection


@section('scripts')
    <script>
        console.log('users page');
    </script>
@endsection
