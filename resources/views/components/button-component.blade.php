{{-- <button type="{{ $type }}" style="{{ $style }}">
    Submit
</button> --}}

{{-- 
<button {{ $attributes->merge(['class' => 'up left', 'id' => 'btn_id']) }} type="{{ $type }}">Click Here</button> --}}


<button type="{{ $type }}">
    @foreach ($attributes as $attribute => $value)
        {{ $changeClass() }}
    @endforeach

</button>
