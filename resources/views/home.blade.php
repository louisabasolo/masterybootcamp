{{-- @extends('layouts.master')

@section('sidebar')
    <p>hello</p>
@endsection

@section('content')
    <h1>welcome</h1>
@endsection

<x-button-component :type="$type" :style="$style"></x-button-component> --}}

@props(['master' => 'I am the master'])

<x-master>
    {{ $master }}
    <p>HOME</p>
</x-master>


{{-- <x-button-component :type="$type"></x-button-component> --}}

<x-button-component :$type class="down"></x-button-component>
