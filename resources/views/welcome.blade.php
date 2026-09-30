<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Categories</h1>
    <h2>Categories Store</h2>
    <form action="/categories" method="post">
        @csrf
        <button type="submit">Create Category</button>
    </form>
    <hr>
    <h2>Categories Show</h2>
    <a href="/categories/pokemon">Show Category</a>
    <hr>
    <h2>Edit Category</h2>
    <a href="/categories/pokemon/edit">Edit Category</a>
</body>
</html>