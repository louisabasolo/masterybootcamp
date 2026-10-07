<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Requests Input</title>
</head>

<body>
    {{-- <form action="" method="post">
        @csrf
        <input type="text" name="colors[]" value="blue">
        <input type="text" name="colors[]" value="red">
        <input type="text" name="colors[]" value="yellow">
         <input type="text" name="colors[]" value="pink">
         <button type="submit">SUBMIT</button>
    </form> --}}

    {{-- <form action="/date" method="post">
        @csrf
        <input type="date" name="appointment">
        <button type="submit">SUBMIT</button>
    </form>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dateModal">
        Open Date Modal
    </button> --}}

    <div class="container mt-5">
        <form action="/flash" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ old('email') }}">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="username" value="{{ old('username') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
