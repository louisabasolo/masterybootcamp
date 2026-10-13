@extends('layouts.master')

@section('content')
    <x-modal-component color="warning">
        <x-slot name="buttonText">
            Save
        </x-slot>
    </x-modal-component>

    <x-modal-component color="danger">
        <x-slot name="buttonText">
            Close
        </x-slot>
    </x-modal-component>
@endsection
