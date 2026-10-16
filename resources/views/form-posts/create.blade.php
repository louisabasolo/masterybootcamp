@extends('form-layouts.master')

@section('content')
    <div class="col-6 offset-sm-3">
        <h2 class="text-center">Create Post</h2>
        <form method="post" action="{{ route('form-posts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{ old('title') }}" name="title" class="form-control @error('title') is-invalid @enderror"
                    id="title" aria-describedby="titleFeedback">
                <div id="titleFeedback" class="invalid-feedback">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Description</label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" rows="3"
                    aria-describedby="bodyFeedback"></textarea>
                <div id="bodyFeedback" class="invalid-feedback">
                    @error('body')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function(event) {
            axios.post('{{ route('form-posts.store') }}', {
                title: '',
                body: ''
            }).then(function(response) {
                console.log(response);
            })
        })
    </script>
@endsection
