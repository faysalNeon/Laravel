<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>

<h1>notun kicho</h1>
    <form action="http://127.0.0.1:8000/demo" method="POST"> @csrf
        <input type="hidden" name="_method" value="delete">
        <input type="text" name="example">
        <button type="submit"> submit </button>    
    </form>
</body>
</html>