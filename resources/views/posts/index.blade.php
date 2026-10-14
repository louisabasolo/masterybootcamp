@extends('layouts.master')

@section('content')
    <x-modal-component buttonColor="warning" modalColor="info" modalType="save" modalTextColor="danger" modalTitle="Save">
        <x-slot name="buttonText">
            Save
        </x-slot>

        <x-slot name="modalContent">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe iusto ratione incidunt omnis magni delectus
            quasi, quis itaque placeat consectetur in non earum! Quo reprehenderit tempore voluptatum! Doloremque
            recusandae, officiis itaque quos eos ratione ipsa eius atque facilis debitis fugit.
        </x-slot>
    </x-modal-component>

    <x-modal-component buttonColor="danger" modalColor="success" modalType="close" modalTextColor="white" modalTitle="Close">
        <x-slot name="buttonText">
            Close
        </x-slot>

        <x-slot name="modalContent">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non mollitia illum, praesentium doloribus blanditiis
            omnis rem nisi unde incidunt repellat eum qui dicta quas ipsum vel excepturi architecto accusamus inventore
            voluptatibus porro modi asperiores! Dignissimos nobis accusantium explicabo nesciunt earum.
        </x-slot>
    </x-modal-component>
    <x-link-component></x-link-component>
@endsection
