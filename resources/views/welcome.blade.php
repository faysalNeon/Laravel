<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <style>
        body{
            margin: 0;
        }
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
<main>
    <section>
        <h1> Welcome TO Laravel </h1>
        <a href="{{url('login')}}"> Login </a>
    </section>
</main>
</body>
</html>