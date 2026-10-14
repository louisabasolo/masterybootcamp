@extends('layouts.master')

@section('content')
    <h1>Welcome</h1>

    <x-dynamic-component :component="$componentName"></x-dynamic-component>
@endsection
