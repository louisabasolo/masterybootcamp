<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests Input</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="colors[]" value="blue">
        <input type="text" name="colors[]" value="red">
        <input type="text" name="colors[]" value="yellow">
         <input type="text" name="colors[]" value="pink">
         <button type="submit">SUBMIT</button>
    </form>
</body>
</html>